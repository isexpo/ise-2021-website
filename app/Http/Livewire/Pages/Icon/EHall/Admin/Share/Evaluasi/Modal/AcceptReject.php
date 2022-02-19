<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Share\Evaluasi\Modal;

use App\Models\IconHoisShareMember;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AcceptReject extends ModalComponent
{
    public $type;
    public $share_data;

    public function mount($type, $id)
    {
        $this->type = $type;
        $this->share_data = IconHoisShareMember::find($id);
    }

    public function submit()
    {
        if ($this->type == 'reject') {
            $this->share_data->update([
                'is_accepted' => '2'
            ]);
        } elseif ($this->type == 'accept') {
            $this->share_data->update([
                'is_accepted' => '1'
            ]);
            $this->share_data->member->increment('hois_point',250);
        }
        $this->emit('refreshLivewireDatatable');
        $this->forceClose()->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.e-hall.admin.share.evaluasi.modal.accept-reject');
    }
}
