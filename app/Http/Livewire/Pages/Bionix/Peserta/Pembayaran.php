<?php

namespace App\Http\Livewire\Pages\Bionix\Peserta;

use App\Models\Bionix\BionixInvoice;
use App\Models\Bionix\PromoCode;
use App\Models\Bionix\PromoTeam;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class Pembayaran extends Component
{
    use WithFileUploads;

    public $kode_promo;
    public $nomor_invoice;
    public $image;
    public $promo;
    public $payment_price;
    public $invoice;

    public function mount()
    {
        $this->promo = [];
        if (Auth::user()->userable->bionix->payment_verif_status != 'Belum Bayar') {

            $this->payment_price = Auth::user()->userable->bionix->payment_price;
            return;
        }
        $this->payment_price = Setting::where('name', (Auth::user()->userable->bionix_type == 'bionix_junior' ? 'bionix_junior_price' : 'bionix_senior_price'))->first()->value;
    }

    public function backToPayment()
    {
        foreach (Auth::user()->userable->bionix->promo as $p) {
            $p->delete();
        }
        if (Auth::user()->userable->bionix->invoice_no) {
            Auth::user()->userable->bionix->invoice->update(
                [
                    'status' => 'Unused'
                ]
            );
        }
        Auth::user()->userable->bionix->update([
            'invoice_no' => null,
            'payment_verif_status' => 'Belum Bayar',
            'payment_price' => Setting::where('name', (Auth::user()->userable->bionix_type == 'bionix_junior' ? 'bionix_junior_price' : 'bionix_senior_price'))->first()->value
        ]);
        if(sizeof($this->promo)==0&&!$this->nomor_invoice){
            $this->payment_price = Setting::where('name', (Auth::user()->userable->bionix_type == 'bionix_junior' ? 'bionix_junior_price' : 'bionix_senior_price'))->first()->value;
        }

    }

    public function checkPromo()
    {
        $promo = PromoCode::where('promo_code', $this->kode_promo)->first();
        if ($promo) {
            foreach ($this->promo as $p) {
                if ($p['id'] == $promo->id) {
                    session()->flash('error', 'Promo sudah anda gunakan');
                    return;
                }
            }

            if (Carbon::now() >= $promo->start && Carbon::now() <= (new \DateTime($promo->end))->modify("+1 day")->modify("-1 second")->format("Y-m-d H:i:s")) {
//                session()->flash('message', 'Anda mendapatkan potongan sebesar Rp ' . number_format($this->promo->nominal, 2, ',', '.'));
                array_push($this->promo, [
                    'id' => $promo->id,
                    'kode' => strtoupper($promo->promo_code),
                    'potongan' => $promo->nominal
                ]);
                $this->countPrice();
                return;
            }
        }
        session()->flash('error', 'Promo tidak ditemukan');
    }

    function countPrice()
    {
        $payment_price = Setting::where('name', (Auth::user()->userable->bionix_type == 'bionix_junior' ? 'bionix_junior_price' : 'bionix_senior_price'))->first()->value;
        foreach ($this->promo as $promo) {
            $payment_price -= $promo['potongan'];
        }
        if ($this->invoice) {
            $payment_price -= $this->invoice->nominal;
        }
        $this->payment_price = $payment_price;
    }

    function removePromo($row)
    {
        array_splice($this->promo, $row, 1);
        $this->countPrice();
    }

    function removeInvoice()
    {
        $this->invoice = null;
        $this->countPrice();
    }

    public function checkInvoice()
    {
        $invoice = BionixInvoice::where('invoice_no', $this->nomor_invoice)->where('status', 'unused')->first();
        if ($invoice) {
            $this->invoice = $invoice;
            $this->countPrice();
            return;
        }
        session()->flash('error', 'Invoice tidak ditemukan');
        $this->countPrice();
    }

    public function submitBayar()
    {
        if ($this->promo) {
            foreach ($this->promo as $promo) {
                PromoTeam::create([
                    'promo_id' => $promo['id'],
                    'team_id' => Auth::user()->userable->bionix->id,
                    'team_type' => Auth::user()->userable->bionix_type == 'bionix_junior' ? 'App\Models\Bionix\TeamJuniorData' : 'App\Models\Bionix\TeamSeniorData'
                ]);
            }
        }
        $this->countPrice();
        if ($this->payment_price <= 0) {
            Auth::user()->userable->bionix->update([
                'invoice_no' => ($this->invoice ? $this->invoice->invoice_no : null),
                'payment_verif_status' => 'Terverifikasi',
                'payment_price' => $this->payment_price
            ]);
            if ($this->invoice) {
                $this->invoice->update([
                    'status' => 'Used'
                ]);
            }
            return;
        }
        if ($this->invoice) {
            $this->invoice->update([
                'status' => 'Pending'
            ]);
        }
        Auth::user()->userable->bionix->update([
            'invoice_no' => ($this->invoice ? $this->invoice->invoice_no : null),
            'payment_verif_status' => 'Belum Unggah',
            'payment_price' => $this->payment_price
        ]);
    }

    public function save()
    {
        $this->validate([
            'image' => 'image|max:2048', // 2MB Max
        ]);
        Storage::disk('public')->makeDirectory('bukti_bayar');
        $name = date('YmdHis') . '_' . Auth::user()->userable->bionix->team_name . '.' . $this->image->getClientOriginalExtension();
        $resized_image = (new ImageManager())
            ->make($this->image)
            ->resize(700, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($this->image->getClientOriginalExtension());
        Storage::disk('public')
            ->put('bukti_bayar/' . $name,
                $resized_image->__toString());
//        $path = Storage::disk('public')->putFile('bukti_bayar', $this->image);
        Auth::user()->userable->bionix->update([
            'payment_proof_path' => 'bukti_bayar/' . $name,
            'payment_verif_status' => 'Tahap Verifikasi'
        ]);
    }

    public function closeMessage()
    {
        session()->remove('error');
    }

    public function render()
    {
        return view('livewire.pages.bionix.peserta.pembayaran');
    }
}
