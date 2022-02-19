<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Pengumuman\Modal;

use App\Models\Icon\Announcement;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    //TODO (Putri) Pengumuman
    //Modifikasi dari CRUD pengumuman BIONIX
    //URL : /dashboard/admin/academy/pengumuman
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
        return view('livewire.pages.icon.academy.admin.pengumuman.modal.delete');
    }
}
