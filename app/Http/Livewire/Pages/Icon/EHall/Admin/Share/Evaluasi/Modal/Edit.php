<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Share\Evaluasi\Modal;

use App\Models\IconHoisShareMember;
use App\Models\Icon\IconAcademyTask;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class Edit extends ModalComponent
{

    //se WithFileUploads;

    public $submission, $is_accepted;

    public function mount($id)
    {
        $this->submission = IconHoisQuestMember::find($id);
        $this->is_accepted = $this->submission->is_accepted;
    }

    public function save()
    {
        $arr_validate = [
            'is_accepted' => 'required|int',
        ];

        $this->validate($arr_validate);
        // $path = $this->submission->evaluation_file_path;
        // if ($this->evaluation_file) {
        //     if ($this->submission->evaluation_file_path) {
        //         Storage::disk('public')->delete($this->submission->evaluation_file_path);
        //     }
        //     $name = date('YmdHis') . '_' . $this->submission->task->task_type . '_' . $this->submission->task->title . '_' . 'evaluasi' . '.' . $this->evaluation_file->getClientOriginalExtension();
        //     $this->evaluation_file->storeAs('evaluasi_tugas_icon', $name, 'public');
        //     $path = 'evaluasi_tugas_icon/' . $name;
        // }
        $this->submission->update([
            'is_accepted' => $this->is_accepted,
        ]);
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.e-hall.admin.share.evaluasi.modal.edit');
    }
}
