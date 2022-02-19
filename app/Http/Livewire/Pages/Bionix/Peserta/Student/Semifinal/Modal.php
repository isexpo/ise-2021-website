<?php

namespace App\Http\Livewire\Pages\Bionix\Peserta\Student\Semifinal;

use App\Models\Bionix\Submission;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class Modal extends ModalComponent
{
    use WithFileUploads;

    public $fileSemifinal, $submission, $deadline, $videoLink, $errorMessage;

    public function mount($submission)
    {
        $this->deadline = date('Y-m-d H:i:s', strtotime('2021-10-23 23:59:59'));
        if ($submission) {
            $this->submission = Submission::find($submission);
            if ($this->submission) {
                $this->videoLink = $this->submission->video_link;
            }
        }
    }

    public function submit()
    {
        $this->errorMessage='';
        $this->validate([
            'videoLink' => 'required|url'
        ]);

        if ($this->deadline < Carbon::now()) {
            $this->errorMessage='Pengumpulan melebihi batas waktu.';
            return;
        }
        $name = $this->submission ? $this->submission->file_path : null;
        if (!is_string($this->fileSemifinal) && $this->fileSemifinal) {
            $this->validate([
                'fileSemifinal' => 'required|max:10240|mimes:pdf,zip,rar'
            ]);
            $name = (date('YmdHis') . '_Semifinal BIONIX Student_' . \Auth::user()->userable->bionix->team_name . '.' . $this->fileSemifinal->getClientOriginalExtension());
            $this->fileSemifinal->storeAs('semifinal_bionix_student', $name, 'public');
            $name = 'semifinal_bionix_student/' . $name;
        }

        if ($this->submission) {
            if ($this->submission->file_path && !is_string($this->fileSemifinal) && $this->fileSemifinal)
                \Storage::disk('public')->delete($this->submission->file_path);
            $this->submission->update([
                'file_path' => $name ? $name : null,
                'submit_time' => Carbon::now(),
                'video_link' => $this->videoLink
            ]);
        } else {
            $submission = Submission::create([
                'team_id' => \Auth::user()->userable->bionix_id,
                'team_type' => 'App\Models\Bionix\TeamJuniorData',
                'file_path' => $name ? $name : null,
                'submission_type' => 'Junior Semifinal',
                'video_link' => $this->videoLink
            ]);
            $this->submission = $submission;
        }
        $this->emit('showSuccess', $this->submission);
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.pages.bionix.peserta.student.semifinal.modal');
    }
}
