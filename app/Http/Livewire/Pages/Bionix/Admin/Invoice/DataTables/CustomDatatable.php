<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Invoice\DataTables;

use App\Models\Bionix\BionixInvoice;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class CustomDatatable extends LivewireDatatable
{
    public $model = BionixInvoice::class;

    public function columns()
    {
        return [
            Column::name('invoice_no')->label('Nomor Invoice'),
            Column::name('payer_name')->label('Nama Pembayar'),
            NumberColumn::name('nominal'),
            Column::name('bank_name')->label('Nama Bank'),
            Column::name('account_name')->label('Pemilik Rekening'),
            Column::name('account_no')->label('Nomor Rekening'),
            Column::name('creator_name')->label('Nama Pembuat'),
            Column::name('status'),
            Column::callback(['invoice_no'], function ($id) {
                return view('livewire.pages.bionix.admin.invoice.data-tables.actions', ['id' => $id]);
            })
        ];
    }
}
