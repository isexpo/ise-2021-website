<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Peserta\Tugas;

use App\Models\Icon\IconAcademySubmission;
use App\Models\Icon\IconAcademyTask;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;
use Illuminate\Support\Collection;

class Index extends Component
{
//TODO (Atra) (Tugas Startup/Data Science)
//Cukup modifikasi dari bagian pengumuman
//
//URL : /dashboard/peserta/academy/tugas
    use WithFileUploads;

    public $tasks = [];
    public $tasks_list = [];
    public $teamname;
    public $taskSubmit;
    public $fileTask;
    public $message, $messageType;
    public $isUpload = false;
    public $isSubmit;
    public $isStartup = false;
    public $alert_coll;

    protected $listeners = ['successUpload', 'onUpload', 'alreadyDeadline', 'getTask'];

    public function mount()
    {
        if (\Auth::user()->userable->academy_type == 'Startup Academy') {
            $this->isStartup = true;
        }
        $this->teamname = ($this->isStartup ? \Auth::user()->userable->academy->team_name : \Auth::user()->name);
        $this->getTask();
    }

    public function alreadyDeadline()
    {
        $this->message = 'Tugas sudah melewati masa deadline';
        $this->messageType = 'red';
    }

    public function onUpload()
    {
        $this->message = 'Jawaban anda sedang diunggah';
        $this->messageType = 'blue';
    }

    public function successUpload()
    {
        $this->message = 'Jawaban berhasil diunggah';
        $this->messageType = 'green';
        $this->getTask();
    }

    public function getTask()
    {
        if (\Auth::user()->userable->academy->academy_status != "Tidak Lolos") {
            $this->tasks = IconAcademyTask::where('task_type', ($this->isStartup ? 'Startup' : 'Data Science'))->orderBy('created_at', 'desc')->get();
        } else {
            $this->reset('tasks');
            $academy_type = \Auth::user()->userable->academy_type == "Startup Academy" ? "App\Models\Icon\IconAcademyStartup" : "App\Models\Icon\IconAcademyDataScience";
            $submission = IconAcademySubmission::join('icon_academy_tasks as task', 'task.id', 'icon_academy_submissions.task_id')->where('member_id', \Auth::user()->userable->academy_id)
                ->where('member_type', $academy_type)->orderBy('task.deadline', 'desc')->get();
            foreach ($submission as $s) {
                array_push($this->tasks, $s->task);
            }
        }
        $this->alert();

    }

    public function closeMessage()
    {
        $this->resetErrorBag();
        $this->message = null;
        $this->messageType = null;
    }


    public function alert()
    {
        $this->alert_coll = collect([]);
        if (IconAcademyTask::where('task_type', ($this->isStartup ? 'Startup' : 'Data Science'))->get()->isNotEmpty()) {
            foreach (IconAcademyTask::where('task_type', ($this->isStartup ? 'Startup' : 'Data Science'))->get() as $task) {

                if (\Auth::user()->userable->academy->submission->where('task_id', $task->id)->isEmpty()) {
                    if ($task->deadline < Carbon::now()) {
                        $this->alert_coll->put(
                            $task->id, ['alert_color' => 'red', 'alert_header' => 'Pengumpulah ' . $task->title . ' sudah ditutup', 'alert_content' => 'Mohon maaf, Tugas sudah melewati deadline pengumpulan :  <b>' . date('d F Y H:i:s ', strtotime($task->deadline)) . '</b>']
                        );
                    } else {
                        $this->alert_coll->put(
                            $task->id, ['alert_color' => 'blue', 'alert_header' => 'Segera unggah ' . $task->title, 'alert_content' => 'Segera selesaikan dan unggah tugas sebelum tanggal <b>' . date('d F Y H:i:s', strtotime($task->deadline)) . '</b>']
                        );
                    }
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.pages.icon.academy.peserta.tugas.index');
    }
}
