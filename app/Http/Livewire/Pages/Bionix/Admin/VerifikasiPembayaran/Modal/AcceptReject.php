<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\VerifikasiPembayaran\Modal;

use App\Models\Bionix\BionixInvoice;
use App\Models\Bionix\TeamJuniorData;
use App\Models\Bionix\TeamSeniorData;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AcceptReject extends ModalComponent
{
    public $type;
    public $bionix_data;
    public $comment = '';

    public function mount($modal_type, $type, $id)
    {
        $this->type = $modal_type;
        $this->bionix_data = ($type == 'student' ? TeamJuniorData::find($id) : TeamSeniorData::find($id));
    }

    public function submit()
    {
        if ($this->type == 'reject') {
            $this->bionix_data->update([
                'payment_verif_status' => 'Ditolak',
                'payment_verif_comment' => $this->comment
            ]);

        } elseif ($this->type == 'accept') {
            if($this->bionix_data->invoice_no){
                BionixInvoice::findOrFail($this->bionix_data->invoice_no)->update([
                    'status' => 'Used'
                ]);
            }
            $this->bionix_data->update([
                'payment_verif_status' => 'Terverifikasi'
            ]);
        }
        $this->emit('refreshLivewireDatatable');
        $this->forceClose()->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.bionix.admin.verifikasi-pembayaran.modal.accept-reject');
    }
}
