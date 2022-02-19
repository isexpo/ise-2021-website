<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Peserta\Tugas;

use App\Models\Icon\IconAcademySubmission;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class TaskCard extends Component
{
    use WithFileUploads;

    public $task;
    public $submission;
    public $fileTask;

    public function mount($task)
    {
        $this->task = $task;
        $this->submission = $task->submission ? $task->submission->where('member_id', \Auth::user()->userable->academy->id)->first() : null;
    }

    public function updatedFileTask()
    {
        $this->validate([
            'fileTask' => 'required|max:10240|mimes:pdf,zip,rar'
        ]);

        if ($this->task->deadline < Carbon::now()) {
            $this->emit('alreadyDeadline');
            return;
        }
        $this->emit('onUpload');
        $name = $this->submission ? $this->submission->file_path : null;
        if (!is_string($this->fileTask)) {
            $name = ($this->task->task_type == 'Startup' ? date('YmdHis') . '_STARTUP ACADEMY_' . $this->task->title . '_' . \Auth::user()->userable->academy->team_name . '.' . $this->fileTask->getClientOriginalExtension() : date('YmdHis') . '_DS ACADEMY_' . $this->task->title . '_' . \Auth::user()->name . '.' . $this->fileTask->getClientOriginalExtension());
            $this->fileTask->storeAs('jawaban_tugas_icon', $name, 'public');
            $name = 'jawaban_tugas_icon/' . $name;
        }

        if ($this->submission) {
            if ($this->submission->file_path)
                Storage::disk('public')->delete($this->submission->file_path);
            $this->submission->update([
                'file_path' => $name ? $name : null,
                'submit_time' => Carbon::now()
            ]);
        } else {
            $submission = IconAcademySubmission::create([
                'task_id' => $this->task->id,
                'member_id' => \Auth::user()->userable->academy->id,
                'member_type' => (\Auth::user()->userable->academy_type == 'Startup Academy' ? 'App\Models\Icon\IconAcademyStartup' : 'App\Models\Icon\IconAcademyDataScience'),
                'file_path' => $name ? $name : null,
                'submit_time' => Carbon::now()
            ]);
            $this->submission = $submission;
        }

        $this->emit('successUpload');

    }

    public function render()
    {
        return view('livewire.pages.icon.academy.peserta.tugas.task-card');
    }
}
