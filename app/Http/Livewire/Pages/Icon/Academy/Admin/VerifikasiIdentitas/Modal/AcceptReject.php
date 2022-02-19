<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\VerifikasiIdentitas\Modal;

use App\Models\Icon\IconAcademyStartup;
use App\Models\Icon\IconAcademyDataScience;
use LivewireUI\Modal\ModalComponent;

class AcceptReject extends ModalComponent
{
    public $type;
    public $icon_data;
    public $comment = '';
    public $data_science = 'data-science';
    public $startup = 'startup';
    public function mount($modal_type, $type, $id)
    {
        $this->type = $modal_type;
        $this->icon_data = ($type == 'startup' ? IconAcademyStartup::find($id) : IconAcademyDataScience::find($id));
    }

    public function submit()
    {
        if ($this->type == 'reject') {
            $this->icon_data->update([
                'profile_verif_status' => 'Ditolak',
                'profile_verif_comment' => $this->comment
            ]);
        } elseif ($this->type == 'accept') {
            $this->icon_data->update([
                'profile_verif_status' => 'Terverifikasi'
            ]);
        }
        $this->emit('refreshLivewireDatatable');
        $this->forceClose()->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.academy.admin.verifikasi-identitas.modal.accept-reject');
    }
}
