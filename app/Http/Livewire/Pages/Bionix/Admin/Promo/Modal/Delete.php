<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Promo\Modal;

use App\Models\Bionix\PromoCode;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    public $promo;

    public function mount($id){
        $this->promo = PromoCode::find($id);
    }

    public function delete(){
        $this->promo->delete();
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.bionix.admin.promo.modal.delete');
    }
}
