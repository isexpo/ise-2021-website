<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Pengumuman\DataTables;

use App\Models\Bionix\Announcement;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class CustomDatatable extends LivewireDatatable
{
    public $model = Announcement::class;
    public function builder()
    {
        return Announcement::where('category', 'Student')->orWhere('category', 'College')->orWhere('category', 'Both');
    }
    public function columns()
    {
        return [
            Column::name('title')->label('Judul'),
            Column::name('type')->label('Tipe'),
            Column::name('category')->label('Kategori'),
            DateColumn::raw('start')
                ->label('Tanggal Mulai')
                ->format('d M Y')
                ->defaultSort('desc'),
            DateColumn::raw('end')
                ->label('Tanggal Selesai')
                ->format('d M Y'),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.bionix.admin.pengumuman.data-tables.actions', ['id' => $id]);
            })
        ];
    }
}
