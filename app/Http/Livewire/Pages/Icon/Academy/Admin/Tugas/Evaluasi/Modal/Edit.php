<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Tugas\Evaluasi\Modal;

use App\Models\Icon\IconAcademySubmission;
use App\Models\Icon\IconAcademyTask;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class Edit extends ModalComponent
{

    use WithFileUploads;

    public $submission, $evaluation_comment, $evaluation_file;

    public function mount($id)
    {
        $this->submission = IconAcademySubmission::find($id);
        $this->evaluation_comment = $this->submission->evaluation_comment;
    }

    public function save()
    {
        $arr_validate = [
            'evaluation_comment' => 'required|string'
        ];
        if ($this->evaluation_file) {
            $arr_validate = array_merge($arr_validate, [
                'evaluation_file' => 'required|mimes:pdf,zip,rar',
            ]);
        }
        $this->validate($arr_validate);
        $path = $this->submission->evaluation_file_path;
        if ($this->evaluation_file) {
            if ($this->submission->evaluation_file_path) {
                Storage::disk('public')->delete($this->submission->evaluation_file_path);
            }
            $name = date('YmdHis') . '_' . $this->submission->task->task_type . '_' . $this->submission->task->title . '_' . 'evaluasi' . '.' . $this->evaluation_file->getClientOriginalExtension();
            $this->evaluation_file->storeAs('evaluasi_tugas_icon', $name, 'public');
            $path = 'evaluasi_tugas_icon/' . $name;
        }
        $this->submission->update([
            'evaluation_comment' => $this->evaluation_comment,
            'evaluation_file_path' => $path
        ]);
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.academy.admin.tugas.evaluasi.modal.edit');
    }
}
