<?php

namespace App\Http\Livewire\Pages\Bionix\Peserta;

use LivewireUI\Modal\ModalComponent;

class ConfirmationModal extends ModalComponent
{
    public $anggota_no;

    public function mount($anggota_no)
    {
        $this->anggota_no = $anggota_no;
    }

    public function render()
    {
        return view('livewire.pages.bionix.peserta.confirmation-modal');
    }

    public function deleteMember(){
        $this->emit('deleteMember',$this->anggota_no);
        $this->emit('closeModal');
    }
}
