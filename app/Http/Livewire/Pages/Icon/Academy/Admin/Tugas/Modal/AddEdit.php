<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Tugas\Modal;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\Icon\IconAcademyTask;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class AddEdit extends ModalComponent
{
    use WithFileUploads;
    //TODO (Putri) Tugas
    //Modifikasi dari CRUD pengumuman BIONIX (kurang lebih hampir sama kayak pengumuman)
    //
    //URL : /dashboard/admin/academy/tugas
    public $tugas;
    public $type = 'add';
    public $nama_tugas = '';
    public $tipe_tugas = 'startup';
    public $deskripsi_tugas = '';
    public $deadline = '';
    public $question_file;

    public function mount($type, $id = null)
    {
        $this->type = $type;
        if ($type == 'edit') {
            $this->tugas = IconAcademyTask::find($id);
            $this->nama_tugas = $this->tugas->title;
            $this->deskripsi_tugas = $this->tugas->description;
            $this->tipe_tugas = $this->tugas->task_type;
            $this->deadline = date('Y-m-d H:i:s', strtotime($this->tugas->deadline));
            $this->question_file = $this->tugas->question_file_path;
        }
    }

    public function submit()
    {
        $arr_validate = [
            'nama_tugas' => 'required',
            'deskripsi_tugas' => [
                'required', 'string'
            ],
            'tipe_tugas' => 'required',
            'deadline' => 'required|date',
        ];

        if ($this->question_file && !is_string($this->question_file)) {
            $arr_validate = array_merge($arr_validate, [
                'question_file' => 'required|mimes:pdf,zip,rar',
            ]);
        }
        $this->validate($arr_validate);
        $path = null;
        if ($this->question_file && !is_string($this->question_file)) {
            if ($this->tugas) {
                if ($this->tugas->question_file_path) {
                    Storage::disk('public')->delete($this->tugas->question_file_path);
                }
            }
            $name = date('YmdHis') . '_' . $this->tipe_tugas . '_' . $this->nama_tugas . '_' . 'soal' . '.' . $this->question_file->getClientOriginalExtension();
            $this->question_file->storeAs('soal_tugas_icon', $name, 'public');
            $path = 'soal_tugas_icon/' . $name;
        }
        if ($this->type == 'add') {
            IconAcademyTask::create([
                'title' => $this->nama_tugas,
                'description' => $this->deskripsi_tugas,
                'task_type' => $this->tipe_tugas,
                'deadline' => date('Y-m-d H:i:s', strtotime($this->deadline)),
                'question_file_path' => $path
            ]);
        } elseif ($this->type == 'edit') {
            if ($path) {
                $this->tugas->update(['question_file_path' => $path]);
            }
            $this->tugas->update([
                'title' => $this->nama_tugas,
                'description' => $this->deskripsi_tugas,
                'task_type' => $this->tipe_tugas,
                'deadline' => date('Y-m-d H:i:s', strtotime($this->deadline)),
            ]);
        }

        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.academy.admin.tugas.modal.add-edit');
    }
}
