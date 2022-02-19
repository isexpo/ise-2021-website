<?php

namespace App\Http\Livewire\Pages\Icon\Jobfair\Admin\Lowongan\Modal;

use App\Models\IconJobfairLowongan;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{

    public $lowongan;

    public function mount($id)
    {
        $this->lowongan = IconJobfairLowongan::find($id);
    }

    public function delete()
    {
        $this->lowongan->delete();
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.jobfair.admin.lowongan.modal.delete');
    }
}
