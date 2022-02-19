<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Invoice;

use App\Models\Bionix\BionixInvoice;
use Barryvdh\DomPDF\Facade as PDF;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['invoiceExportPDF'];

    public function invoiceExportPDF($id)
    {
        $invoice = BionixInvoice::find($id);
        $pdf = PDF::loadView('invoice-export', ['invoice'=>$invoice])->setPaper('a4','landscape')->output();

        return response()->streamDownload(
            function () use ($pdf,$invoice) {
                print($pdf);
            },
            str_replace('/','_',$invoice->invoice_no).".pdf"
        );
    }

    public function render()
    {
        return view('livewire.pages.bionix.admin.invoice.index');
    }
}
