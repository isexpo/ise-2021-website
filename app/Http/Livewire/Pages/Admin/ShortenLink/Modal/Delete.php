<?php

namespace App\Http\Livewire\Pages\Admin\ShortenLink\Modal;

use App\Models\ShortenLink;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    public $shorten_link;

    public function mount($id)
    {
        $this->shorten_link = ShortenLink::find($id);
    }

    public function delete()
    {
        $this->shorten_link->delete();
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.admin.shorten-link.modal.delete');
    }
}
