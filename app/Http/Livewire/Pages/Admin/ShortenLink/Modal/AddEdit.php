<?php

namespace App\Http\Livewire\Pages\Admin\ShortenLink\Modal;

use App\Models\ShortenLink;
use LivewireUI\Modal\ModalComponent;

class AddEdit extends ModalComponent
{
    public $shorten_link;
    public $type = 'add';
    public $link_pendek;
    public $link_tujuan;
    public $deskripsi;

    public function mount($type, $id = null)
    {
        $this->type = $type;
        if ($type == 'edit') {
            $this->shorten_link = ShortenLink::find($id);
            $this->link_pendek = $this->shorten_link->shorten_link;
            $this->link_tujuan = $this->shorten_link->destination;
            $this->deskripsi = $this->shorten_link->description;
        }
    }

    public function submit()
    {
        if ($this->type == 'add') {
            $this->validate([
                'link_pendek' => 'required|unique:shorten_links,shorten_link',
                'link_tujuan' => 'required',
                'deskripsi' => 'required',
            ]);
            ShortenLink::create([
                'shorten_link'=>$this->link_pendek,
                'destination'=>$this->link_tujuan,
                'description'=>$this->deskripsi
            ]);
        } elseif ($this->type == 'edit') {
            $this->validate([
                'link_pendek' => 'required|unique:shorten_links,shorten_link,'.$this->shorten_link->id,
                'link_tujuan' => 'required',
                'deskripsi' => 'required',
            ]);
            $this->shorten_link->update([
                'shorten_link'=>$this->link_pendek,
                'destination'=>$this->link_tujuan,
                'description'=>$this->deskripsi
            ]);
        }

        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.admin.shorten-link.modal.add-edit');
    }
}
