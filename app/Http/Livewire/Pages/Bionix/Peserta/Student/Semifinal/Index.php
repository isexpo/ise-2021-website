<?php

namespace App\Http\Livewire\Pages\Bionix\Peserta\Student\Semifinal;

use App\Models\Bionix\Submission;
use Livewire\Component;

class Index extends Component
{

    public $message, $messageType;
    public $deadline,
        $submission;
    protected $listeners = ['showSuccess'];

    public function mount()
    {
        $this->deadline = date('Y-m-d H:i:s', strtotime('2021-10-23 23:59:59'));
        $this->submission = Submission::where('team_id', \Auth::user()->userable->bionix_id)
            ->where('team_type', 'App\Models\Bionix\TeamJuniorData')
            ->where('submission_type', 'Junior Semifinal')
            ->orderBy('updated_at', 'desc')
            ->first();
    }

    public function showSuccess($submission)
    {
        $this->message = 'Jawaban berhasil diunggah';
        $this->messageType = 'green';
        $this->submission = (new Submission)->newInstance($submission);
    }

    public function render()
    {
        return view('livewire.pages.bionix.peserta.student.semifinal.index');
    }
}
