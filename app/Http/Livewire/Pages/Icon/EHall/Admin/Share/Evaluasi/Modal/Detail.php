<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Share\Evaluasi\Modal;

use App\Models\IconHoisShareMember;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Detail extends ModalComponent
{
    public $share;

    public function mount($id)
    {
        $submission_data = IconHoisShareMember::find($id);
        $this->share = $submission_data;
    }
    // public function download()
    // {
    //     try {
    //         return Storage::disk('public')->download($this->evaluation_file_path);
    //     } catch (\Exception $e) {
    //         return abort(404);
    //     }
    // }

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }
    public function render()
    {
        return view('livewire.pages.icon.e-hall.admin.share.evaluasi.modal.detail');
    }
}
