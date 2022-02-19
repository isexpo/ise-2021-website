<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Peserta\Pembayaran;

use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;

class Index extends Component
{
//TODO (Atra) (Pembayaran Startup/Data Science)
//Cukup modifikasi dari pembayaran BIONIX aja
//
//URL : /dashboard/peserta/academy/pembayaran
use WithFileUploads;
public $image;
public $payment_price;
public $alert_color, $alert_header, $alert_content;


    public function mount(){
        $this->payment_price = Setting::where('name', (\Auth::user()->userable->academy_type == 'Startup Academy' ? 'academy_startup_price' : 'academy_data_science_price'))->first()->value;
        $this->alert();

    }


    public function save()
    {
        $this->validate([
            'image' => 'image|max:2048', // 2MB Max
        ]);
        Storage::disk('public')->makeDirectory('bukti_bayar_icon');
        $name = (\Auth::user()->userable->academy_type == 'Startup Academy'?date('YmdHis') . '_' . \Auth::user()->userable->academy->team_name . '.' . $this->image->getClientOriginalExtension():date('YmdHis') . '_' . \Auth::user()->name . '.' . $this->image->getClientOriginalExtension()) ;
        $resized_image = (new ImageManager())
            ->make($this->image)
            ->resize(700, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($this->image->getClientOriginalExtension());
        Storage::disk('public')
            ->put('bukti_bayar_icon/' . $name,
                $resized_image->__toString());
//        $path = Storage::disk('public')->putFile('bukti_bayar', $this->image);
        \Auth::user()->userable->academy->update([
            'payment_proof_path' => 'bukti_bayar_icon/' . $name,
            'payment_verif_status' => 'Tahap Verifikasi'
        ]);
        $this->alert();
    }




    public function alert(){
        switch (\Auth::user()->userable->academy->payment_verif_status) {
            case 'Tahap Verifikasi':
                $this->alert_color='yellow';
                $this->alert_header = 'Pembayaran Sedang Dalam Tahap Verifikasi';
                $this->alert_content = 'Mohon tunggu beberapa saat hingga pembayaran anda diverifikasi oleh admin';
                break;
            case 'Terverifikasi':
                $this->alert_color='green';
                $this->alert_header = 'Pembayaran Telah Terverifikasi';
                $this->alert_content = 'Selamat pembayaran telah diverifikasi oleh admin';
                break;
            case 'Ditolak':
                $this->alert_color='red';
                $this->alert_header = 'Pembayaran Ditolak';
                $this->alert_content = 'Pembayaran karena alasan berikut : '.\Auth::user()->userable->academy->payment_verif_comment;
                break;
            default:
                $this->alert_color='blue';
                $this->alert_header = 'Segera Unggah Bukti Bayar Anda';
                $this->alert_content = 'Lakukan pengunggahan bukti bayar tempat yang telah disediakan';
                break;
        }
    }
    public function render()
    {
        return view('livewire.pages.icon.academy.peserta.pembayaran.index');
    }
}
