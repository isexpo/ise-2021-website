<?php

namespace App\Http\Livewire\Pages\Icon\Jobfair\Admin\Perusahaan\Modal;

use App\Models\IconJobfairPerusahaan;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    public $perusahaan;

    public function mount($id)
    {
        $this->perusahaan = IconJobfairPerusahaan::find($id);
    }

    public function delete()
    {
        $this->perusahaan->delete();
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.jobfair.admin.perusahaan.modal.delete');
    }
}

