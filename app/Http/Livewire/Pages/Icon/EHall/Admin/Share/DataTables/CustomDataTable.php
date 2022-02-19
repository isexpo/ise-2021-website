<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Share\DataTables;

use App\Models\IconHoisShareArticle;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class CustomDatatable extends LivewireDatatable
{
    public $model = IconHoisShareArticle::class;

    // public function builder()
    // {
    //     return IconHoisShareArticle::where('category', 'Startup')->orWhere('category', 'Data Science')->orWhere('category', 'All Academy');
    // }

    public function columns()
    {
        return [
            //Column::name('img_path')->label('Image'),
            Column::name('caption')->label('Caption'),
            DateColumn::raw('start')
                ->label('Tanggal Mulai')
                ->format('d M Y')
                ->defaultSort('desc'),
            DateColumn::raw('end')
                ->label('Tanggal Selesai')
                ->format('d M Y'),
            Column::callback(['id', 'img_path'], function ($id, $img_path) {
                return view('livewire.pages.icon.e-hall.admin.share.data-tables.actions', ['id' => $id, 'img_path' => $img_path]);
            })
        ];
    }
}
