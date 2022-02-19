<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Invoice\Modal;

use App\Models\Bionix\BionixInvoice;
use LivewireUI\Modal\ModalComponent;

class AddEdit extends ModalComponent
{
    public $invoice;
    public $type = 'add';
    public $nama_pembayar = '';
    public $nominal = 0;
    public $nama_bank = '';
    public $nama_pemilik_rekening = '';
    public $nomor_rekening = '';
    public $nama_pembuat = '';

    public function mount($type, $id = null)
    {
        $this->type = $type;
        if ($type == 'edit') {
            $this->invoice = BionixInvoice::find($id);
            $this->nama_pembayar = $this->invoice->payer_name;
            $this->nominal = $this->invoice->nominal;
            $this->nama_bank = $this->invoice->bank_name;
            $this->nama_pemilik_rekening = $this->invoice->account_name;
            $this->nomor_rekening = $this->invoice->account_no;
            $this->nama_pembuat = $this->invoice->creator_name;
        }
    }

    public function submit()
    {
        $this->validate([
            'nama_pembayar' => 'required|string',
            'nominal' => 'required|min:0|integer',
            'nama_bank' => 'required|string',
            'nama_pemilik_rekening' => 'required|string',
            'nomor_rekening' => 'required|string',
            'nama_pembuat' => 'required|string',
        ]);

        if ($this->type == 'add') {
            $random_no = rand(0, 9999);
            $invoice_no = 'INV/'
                . date('Y') . '/'
                . date('m') . '/'
                . ($random_no < 10 ? '000' . $random_no : ($random_no < 100 && $random_no >= 10 ? '00' . $random_no : ($random_no < 1000 && $random_no >= 100 ? '0' . $random_no : $random_no)));
            BionixInvoice::create([
                'invoice_no' => $invoice_no,
                'payer_name' => $this->nama_pembayar,
                'bank_name' => $this->nama_bank,
                'account_name' => $this->nama_pemilik_rekening,
                'account_no' => $this->nomor_rekening,
                'creator_name' => $this->nama_pembuat,
                'status' => 'unused',
                'nominal' => $this->nominal,

            ]);
        } elseif ($this->type == 'edit') {
            $this->invoice->update([
                'payer_name' => $this->nama_pembayar,
                'bank_name' => $this->nama_bank,
                'account_name' => $this->nama_pemilik_rekening,
                'creator_name' => $this->nama_pembuat,
                'nominal' => $this->nominal,
                'account_no' => $this->nomor_rekening,
            ]);
        }

        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.bionix.admin.invoice.modal.add-edit');
    }
}
