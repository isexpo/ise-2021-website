<?php

namespace App\Http\Livewire\Pages\Bionix\Peserta\College\Penyisihan;

use App\Models\Bionix\Submission;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    public $message, $messageType;
    public $deadline,
        $submission,
        $filePenyisihan;
    protected $listeners=['showSuccess'];
    public function mount()
    {
        $this->deadline = date('Y-m-d H:i:s', strtotime('2021-09-16 23:59:59'));
        $this->submission = Submission::where('team_id', \Auth::user()->userable->bionix_id)
            ->where('team_type', 'App\Models\Bionix\TeamSeniorData')
            ->where('submission_type', 'Senior Penyisihan')->first();
    }

    public function showSuccess($submission){
        $this->message = 'Jawaban berhasil diunggah';
        $this->messageType = 'green';
        $this->submission=(new Submission)->newInstance($submission);
    }

    public function render()
    {
        return view('livewire.pages.bionix.peserta.college.penyisihan.index');
    }
}
