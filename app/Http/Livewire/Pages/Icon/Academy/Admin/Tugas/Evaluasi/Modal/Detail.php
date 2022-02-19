<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Tugas\Evaluasi\Modal;

use App\Models\Icon\IconAcademySubmission;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Detail extends ModalComponent
{
    public $evaluation_comment, $evaluation_file_path;

    public function mount($id)
    {
        $submission_data = IconAcademySubmission::find($id);
        $this->evaluation_comment = $submission_data->evaluation_comment;
        $this->evaluation_file_path = $submission_data->evaluation_file_path;
    }

    public function download()
    {
        try {
            return Storage::disk('public')->download($this->evaluation_file_path);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function render()
    {
        return view('livewire.pages.icon.academy.admin.tugas.evaluasi.modal.detail');
    }
}
