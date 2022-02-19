<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Promo\DataTables;

use App\Models\Bionix\PromoCode;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class CustomDatatable extends LivewireDatatable
{
    public $model = PromoCode::class;
    public function columns()
    {
        return [
            Column::name('name')->label('Nama'),
            Column::name('promo_code')->label('Kode'),
            NumberColumn::name('nominal'),
            DateColumn::raw('start')
                ->label('Tanggal Mulai')
                ->format('d M Y')
                ->defaultSort('desc'),
            DateColumn::raw('end')
                ->label('Tanggal Selesai')
                ->format('d M Y'),
            Column::callback(['id'],function($id){
                return view('livewire.pages.bionix.admin.promo.data-tables.actions',['id'=>$id]);
            })
        ];
    }
}
