<?php

namespace App\Http\Livewire\Pages\Landing\Icon\EHall\Article;

use App\Models\IconHoisQuestMember;
use App\Models\IconHoisQuestQuiz;
use Livewire\Component;

class Digiflux extends Component
{
    public $quizzes;
    public $currentQuiz;
    public $answer;
    public $message;
    public $is_done;
    public $quizStatus;
    protected $listeners = ['submitAnswer', 'refreshPage'];


    public function moveQuestion($n)
    {
        $this->currentQuiz += $n;
        $this->answer = "";
    }

    public function refreshPage()
    {
        return redirect()->to(route('isequest.index'));
    }

    public function mount()
    {
        $id_list = [51,52,53,54]; // isi dengan ID kuis untuk startup
        $this->quizzes = IconHoisQuestQuiz::whereIn('id', $id_list)->get();
        $quiz = $this->quizzes[0];
        if (!$quiz) return redirect()->to(route('isequest.index'));
        $this->quizStatus = collect();
        $this->currentQuiz = $this->quizzes->where('id', $quiz->id)->keys()->first();

        foreach ($this->quizzes as $quizNo => $quiz) {
            if (\Auth::check() && \Auth::user()->userType == 'member') {
                $quizAnswered = \Auth::user()->userable->quizAnswers->where('quiz_id', $quiz->id)->first();
                if ($quizAnswered) {
                    $this->quizStatus->put($quizNo, ['is_done' => true, 'btnStatus' => $quizAnswered->is_right == 1 ? 'btn-success' : 'btn-danger']);
                } else {
                    $this->quizStatus->put($quizNo, ['is_done' => false, 'btnStatus' => '']);
                }
            } else {
                $this->quizStatus->put($quizNo, ['is_done' => false, 'btnStatus' => '']);
            }

        }

        // if($quizAnswered){
        //     $this->is_done = true;
        // }
    }

    public function submitAnswer()
    {
        if ($this->quizStatus[$this->currentQuiz]['is_done']) return $this->emit('alert', 'Anda Sudah menjawab quiz');;
        $quiz = IconHoisQuestQuiz::where('id', $this->quizzes[$this->currentQuiz]->id)->first();
        $member = IconHoisQuestMember::create([
            'member_id' => \Auth::user()->userable->id,
            'quiz_id' => $quiz->id,
            'answer' => $this->answer,
            'is_right' => 0
        ]);

        //Check Answer
        if (strtolower($this->answer) == strtolower($quiz->answer)) {
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
    public function render()
    {
        return view('livewire.pages.landing.icon.e-hall.article.digiflux')->layout('layouts.landing');
    }
}
