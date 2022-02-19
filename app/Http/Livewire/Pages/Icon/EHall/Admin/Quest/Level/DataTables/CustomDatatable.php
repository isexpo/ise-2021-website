<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Quest\Level\DataTables;

use App\Models\IconHoisQuestLevel;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CustomDatatable extends LivewireDatatable
{
    public $model = IconHoisQuestLevel::class;

    public function columns()
    {
        return [
            Column::name('name')->label('Level'),
            DateColumn::name('open_time')->label('Waktu Dibuka')->format('d M Y'),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.icon.e-hall.admin.quest.level.data-tables.actions', ['id' => $id]);
            })
        ];
    }
}
