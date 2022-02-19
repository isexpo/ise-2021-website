<?php

namespace App\Http\Livewire\Pages\Icon\Jobfair\Admin\Lowongan\DataTables;

use App\Models\IconJobfairLowongan;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CustomDatatable extends LivewireDatatable
{

    public $model = IconJobfairLowongan::class;

    public function columns()
    {
        return[
            Column::name('name')->label('Judul Lowongan')->searchable(),
            Column::name('desc')->label('Deskripsi Lowongan'),
            Column::name('perusahaan.name')->label('Perusahaan')->searchable(),
            Column::name('type')->label('Tipe Lowongan')->filterable(['Full-Time', 'Part-Time', 'Internship']),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.icon.jobfair.admin.lowongan.data-tables.actions', ['id' => $id]);
            })
        ];
    }
}
