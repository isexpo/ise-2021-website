<?php

namespace App\Http\Livewire\Pages\Icon\EHall\IseQuest;

use App\Models\IconHoisQuestLevel;
use App\Models\IconHoisQuestMember;
use App\Models\IconHoisQuestQuiz;
use Livewire\Component;

class LevelCard extends Component
{
    public $quizzes;
    public $currentQuiz;
    public $answer;
    public $message;
    public $is_done;
    public $quizStatus;
    protected $listeners = ['submitAnswer', 'refreshPage'];

    public function render()
    {
        return view('livewire.pages.icon.e-hall.ise-quest.level-card')->layout('layouts.landing');
    }

    public function moveQuestion($n)
    {
        $this->currentQuiz += $n;
        $this->answer = "";
    }

    public function refreshPage()
    {
        return redirect()->to(route('isequest.index'));
    }

    public function mount($quizId)
    {
        $quiz = IconHoisQuestQuiz::find($quizId);
        if (!$quiz) return redirect()->to(route('isequest.index'));
        if (\Carbon\Carbon::now() < date('Y-m-d H:i:s',strtotime($quiz->level->open_time.' 09:00:00'))) return redirect()->to(route('isequest.index'));
        $this->quizStatus = collect();
        $this->quizzes = $quiz->level->quizzes;
        $this->currentQuiz = $this->quizzes->where('id', $quiz->id)->keys()->first();

        foreach ($this->quizzes as $quizNo => $quiz) {
            if (\Auth::check()&&\Auth::user()->userType == 'member') {
                $quizAnswered = \Auth::user()->userable->quizAnswers->where('quiz_id', $quiz->id)->first();
                if ($quizAnswered) {
                    $this->quizStatus->put($quizNo, ['is_done' => true, 'btnStatus' => $quizAnswered->is_right == 1 ? 'btn-success' : 'btn-danger']);
                }
                else{
                    $this->quizStatus->put($quizNo, ['is_done' => false, 'btnStatus' => '']);
                }
            }else{
                $this->quizStatus->put($quizNo, ['is_done' => false, 'btnStatus' => '']);
            }

        }

        // if($quizAnswered){
        //     $this->is_done = true;
        // }
    }

    public function submitAnswer()
    {
        $check = IconHoisQuestMember::where('member_id',\Auth::user()->userable_id)->where('quiz_id',$this->quizzes[$this->currentQuiz]->id)->first();
        if ($this->quizStatus[$this->currentQuiz]['is_done']||$check) return $this->emit('alert', 'Anda Sudah menjawab quiz');
        $quiz = IconHoisQuestQuiz::where('id', $this->quizzes[$this->currentQuiz]->id)->first();
        $member = IconHoisQuestMember::create([
            'member_id' => \Auth::user()->userable->id,
            'quiz_id' => $quiz->id,
            'answer' => $this->answer,
            'is_right' => 0
        ]);

        //Check Answer
        if (trim(strtolower($this->answer)) == trim(strtolower($quiz->answer))) {
            $member->is_right = 1;
            $member->save();
            \Auth::user()->userable->increment('hois_point', 300);
            $status = "Correct";
            $this->quizStatus = $this->quizStatus->replace([$this->currentQuiz => ['is_done' => true, 'btnStatus' => 'btn-success']]);
            $this->emit('Answer', $status);
        } else {
            $status = "False";
            $this->quizStatus = $this->quizStatus->replace([$this->currentQuiz => ['is_done' => true, 'btnStatus' => 'btn-danger']]);
            $this->emit('Answer', $status);
        }
    }
}
