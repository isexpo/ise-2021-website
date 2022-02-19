<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Pengumuman\DataTables;

use App\Models\Icon\Announcement;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class CustomDatatable extends LivewireDatatable
{
    //TODO (Putri) Pengumuman
    //Modifikasi dari CRUD pengumuman BIONIX
    //URL : /dashboard/admin/academy/pengumuman
    public $model = Announcement::class;

    public function builder()
    {
        return Announcement::where('category', 'Startup')->orWhere('category', 'Data Science')->orWhere('category', 'All Academy');
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
                return view('livewire.pages.icon.academy.admin.pengumuman.data-tables.actions', ['id' => $id]);
            })
        ];
    }
}
