<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Invoice\Modal;

use App\Models\Bionix\BionixInvoice;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    public $invoice;

    public function mount($id){
        $this->invoice = BionixInvoice::find($id);
    }

    public function delete(){
        $this->invoice->delete();
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.pages.bionix.admin.invoice.modal.delete');
    }
}
