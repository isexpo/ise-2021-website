<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Pengumuman\Modal;

use App\Models\Bionix\Announcement;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    public $pengumuman;

    public function mount($id)
    {
        $this->pengumuman = Announcement::find($id);
    }

    public function delete()
    {
        $this->pengumuman->delete();
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.bionix.admin.pengumuman.modal.delete');
    }
}
