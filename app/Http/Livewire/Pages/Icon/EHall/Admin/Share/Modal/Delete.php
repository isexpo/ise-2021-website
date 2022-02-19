<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Share\Modal;

use App\Models\IconHoisShareArticle;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{

    public $share;

    public function mount($id)
    {
        $this->share = IconHoisShareArticle::find($id);
    }

    public function delete()
    {
        $this->share->delete();
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.pages.icon.e-hall.admin.share.modal.delete');
    }
}
