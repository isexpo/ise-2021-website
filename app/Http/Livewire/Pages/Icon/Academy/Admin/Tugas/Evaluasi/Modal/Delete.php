<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Tugas\Evaluasi\Modal;

use App\Models\Icon\IconAcademySubmission;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    public $submission;

    public function mount($id)
    {
        $this->submission = IconAcademySubmission::find($id);
    }

    public function delete()
    {
        if ($this->submission->evaluation_file_path) {
            try {
                Storage::disk('public')->delete($this->submission->evaluation_file_path);
            } catch (\Exception $e) {

            }
        }
        $this->submission->update([
            'evaluation_comment' => null,
            'evaluation_file_path' => null
        ]);
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.academy.admin.tugas.evaluasi.modal.delete');
    }
}
