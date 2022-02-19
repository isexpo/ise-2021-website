<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Tugas\Modal;

use App\Models\Icon\IconAcademyTask;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    //TODO (Putri) Tugas
    //Modifikasi dari CRUD pengumuman BIONIX (kurang lebih hampir sama kayak pengumuman)
    //
    //URL : /dashboard/admin/academy/tugas
    public $tugas;

    public function mount($id)
    {
        $this->tugas = IconAcademyTask::find($id);
    }

    public function delete()
    {
        $this->tugas->delete();
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.pages.icon.academy.admin.tugas.modal.delete');
    }
}
