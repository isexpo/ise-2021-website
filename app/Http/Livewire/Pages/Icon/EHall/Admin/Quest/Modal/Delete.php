<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Quest\Modal;

use App\Models\IconHoisQuestQuiz;
use LivewireUI\Modal\ModalComponent;

//protected $fillable = ['type', 'question', 'opt_a', 'opt_b', 'opt_c', 'opt_d', 'answer', 'explanation', 'quest_level_id'];

class Delete extends ModalComponent
{
    //TODO (Putri) Tugas
    //Modifikasi dari CRUD pengumuman BIONIX (kurang lebih hampir sama kayak pengumuman)
    //
    //URL : /dashboard/admin/academy/tugas
    public $quest;

    public function mount($id)
    {
        $this->quest = IconHoisQuestQuiz::find($id);
    }

    public function delete()
    {
        $this->quest->delete();
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.pages.icon.e-hall.admin.quest.modal.delete');
    }
}
