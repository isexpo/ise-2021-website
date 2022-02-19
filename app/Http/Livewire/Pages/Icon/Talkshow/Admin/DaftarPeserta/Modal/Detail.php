<?php

namespace App\Http\Livewire\Pages\Icon\Talkshow\Admin\DaftarPeserta\Modal;

use App\Models\IconTalkshowMember;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Detail extends ModalComponent
{
    public $talkshow;

    public function mount($id)
    {
        $this->talkshow = IconTalkshowMember::find($id);
    }

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }

    public function render()
    {
        return view('livewire.pages.icon.talkshow.admin.daftar-peserta.modal.detail');
    }
}
