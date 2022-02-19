<?php

namespace App\Http\Livewire\Pages\Icon\EHall\IseQuest;

use App\Models\IconHoisQuestLevel;
use App\Models\IconHoisQuestQuiz;
use Carbon\Carbon;
use Crypt;
use Livewire\Component;
use PhpOffice\PhpSpreadsheet\Chart\Layout;
use Illuminate\Http\RedirectResponse;

class Index extends Component
{
public $levels;
public $quizStatus;

    public function render()
    {
        return view('livewire.pages.icon.e-hall.ise-quest.index')->layout('layouts.landing');
    }

    public function mount(){
        $this->levels = IconHoisQuestLevel::all();
    }

    public function kuisGo($quizId){
        return redirect()->to(route('isequest.quiz', ['quizId' => $quizId]));
    }

}
