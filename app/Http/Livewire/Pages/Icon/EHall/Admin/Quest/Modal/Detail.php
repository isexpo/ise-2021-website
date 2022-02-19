<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Quest\Modal;

use App\Models\IconHoisQuestQuiz;
use LivewireUI\Modal\ModalComponent;

class Detail extends ModalComponent
{
    public $quest;
    public $question;
    public $tipe_quiz;
    public $opt_a;
    public $opt_b;
    public $opt_c;
    public $opt_d;
    public $answer;
    public $explanation;
    public $quest_level;

    public function mount($id)
    {
        $this->quest = IconHoisQuestQuiz::find($id);
        $this->question = $this->quest->question;
        $this->opt_a = $this->quest->opt_a;
        $this->opt_b = $this->quest->opt_b;
        $this->opt_c = $this->quest->opt_c;
        $this->opt_d = $this->quest->opt_d;
        $this->tipe_quiz = $this->quest->type;
        $this->answer = $this->quest->answer;
        $this->explanation = $this->quest->explanation;
        $this->quest_level = $this->quest->level->name;
    }

    public function render()
    {
        return view('livewire.pages.icon.e-hall.admin.quest.modal.detail');
    }

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }
}
