<?php

namespace App\Http\Livewire\Pages\Landing\Icon\VirtualJobFair\Modal;

use App\Models\IconJobfairLowongan;
use LivewireUI\Modal\ModalComponent;

class Detail extends ModalComponent
{
    public
        $lowongan,
        $name,
        $type,
        $desc,
        $requirement;

    public function mount($id)
    {
        $this->lowongan = IconJobfairLowongan::find($id);
        $this->name = $this->lowongan->name;
        $this->type = $this->lowongan->type;
        $this->desc = $this->lowongan->desc;
        $this->requirement = $this->lowongan->requirement;
    }

    public function render()
    {
        return view('livewire.pages.landing.icon.virtual-job-fair.modal.detail');
    }
}
