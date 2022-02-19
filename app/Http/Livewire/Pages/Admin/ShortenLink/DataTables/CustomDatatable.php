<?php

namespace App\Http\Livewire\Pages\Admin\ShortenLink\DataTables;

use App\Models\ShortenLink;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CustomDatatable extends LivewireDatatable
{
    public $model = ShortenLink::class;

    public function columns()
    {
        return [
            Column::name('shorten_link')->label('Shorten Link')->defaultSort('asc')->searchable(),
            Column::name('destination')->label('Link Tujuan')->searchable(),
            Column::name('description')->label('Deskripsi')->searchable(),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.admin.shorten-link.data-tables.actions', ['id' => $id]);
            })
        ];
    }
}
