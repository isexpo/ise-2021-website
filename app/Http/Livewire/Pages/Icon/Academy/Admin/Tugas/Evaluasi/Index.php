<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Tugas\Evaluasi;

use App\Models\Icon\IconAcademyTask;
use Livewire\Component;

class Index extends Component
{
    public $task_id;
    public $title;
    public $deadline;
    public $description;
    public $tugas_type;

    public function mount($id)
    {
        $this->task_id = $id;
        $task = IconAcademyTask::find($id);
        if (!$task) {
            return abort(404);
        }
        $this->title = $task->title;
        $this->deadline = $task->deadline;
        $this->description = $task->description;
        $this->tugas_type = $task->task_type;
    }

    public function render()
    {
        return view('livewire.pages.icon.academy.admin.tugas.evaluasi.index');
    }
}
