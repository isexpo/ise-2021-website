<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Quest\Evaluasi\Modal;

use App\Models\IconHoisShareMember;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    public $submission;

    public function mount($id)
    {
        $this->submission = IconHoisShareMember::find($id);
    }

    public function delete()
    {
        $this->submission->update([
            'is_accepted' => null
        ]);
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.e-hall.admin.share.evaluasi.modal.delete');
    }
}
