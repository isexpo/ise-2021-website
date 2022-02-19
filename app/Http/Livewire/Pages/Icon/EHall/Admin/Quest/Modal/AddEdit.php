<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Quest\Modal;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\IconHoisQuestLevel;
use App\Models\IconHoisQuestQuiz;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;


class AddEdit extends ModalComponent
{
    use WithFileUploads;

    //protected $fillable = ['type', 'question', 'opt_a', 'opt_b', 'opt_c', 'opt_d', 'answer', 'explanation', 'quest_level_id'];
    //protected $fillable = ['title', 'description', 'deadline', 'task_type', 'question_file_path'];
    public $quest;
    public $type = 'add';
    public $question = '';
    public $tipe_quiz = 'Pilgan';
    public $opt_a = '';
    public $opt_b = '';
    public $opt_c = '';
    public $opt_d = '';
    public $answer = 'A';
    public $explanation = '';
    public $quest_level_id = '1';

    public function builder()
    {
        # code...

        if ($this->model == 'App\Models\IconHoisQuestQuiz') {
            return IconHoisQuestQuiz::query()
                ->leftJoin('icon_hois_quest_levels as quest', 'quest.id', 'icon_hois_quest_quizzes.quest_level__id');
        }
    }

    public function onTypeChange()
    {
        switch ($this->tipe_quiz) {
            case 'Pilgan':
                $this->answer = 'A';
                break;
            case 'Isian':
                $this->answer = '';
                break;
            case 'ToF':
                $this->answer = 'True';
                break;
        }
    }

    public function mount($type, $id = null)
    {
        $this->type = $type;
        if ($type == 'edit') {
            $this->quest = IconHoisQuestQuiz::find($id);
            $this->question = $this->quest->question;
            $this->tipe_quiz = $this->quest->type;
            $this->opt_a = $this->quest->opt_a;
            $this->opt_b = $this->quest->opt_b;
            $this->opt_c = $this->quest->opt_c;
            $this->opt_d = $this->quest->opt_d;
            $this->answer = $this->quest->answer;
            $this->explanation = $this->quest->explanation;
            $this->quest_level_id = $this->quest->quest_level_id;
        }
    }

    public function submit()
    {
        $arr_validate = [
            'question' => 'required',
            'tipe_quiz' => 'required',
            'opt_a' => '',
            'opt_b' => '',
            'opt_c' => '',
            'opt_d' => '',
            'answer' => 'required',
            'explanation' => 'required',
            'quest_level_id' => 'required',
        ];


        $this->validate($arr_validate);
        if ($this->type == 'add') {
            IconHoisQuestQuiz::create([
                'question' => $this->question,
                'type' => $this->tipe_quiz,
                'opt_a' => $this->opt_a,
                'opt_b' => $this->opt_b,
                'opt_c' => $this->opt_c,
                'opt_d' => $this->opt_d,
                'answer' => $this->answer,
                'explanation' => $this->explanation,
                'quest_level_id' => $this->quest_level_id,
            ]);
        } elseif ($this->type == 'edit') {
            $this->quest->update([
                'question' => $this->question,
                'type' => $this->tipe_quiz,
                'opt_a' => $this->opt_a,
                'opt_b' => $this->opt_b,
                'opt_c' => $this->opt_c,
                'opt_d' => $this->opt_d,
                'answer' => $this->answer,
                'explanation' => $this->explanation,
                'quest_level_id' => $this->quest_level_id,
            ]);
        }
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view(
            'livewire.pages.icon.e-hall.admin.quest.modal.add-edit',
            ['level' => IconHoisQuestLevel::all()]
        );
    }
}
