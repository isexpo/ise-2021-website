<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Tugas\DataTables;

use App\Models\Icon\IconAcademyTask;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class CustomDatatable extends LivewireDatatable
{
    //TODO (Putri) Tugas
    //Modifikasi dari CRUD pengumuman BIONIX (kurang lebih hampir sama kayak pengumuman)
    //
    //URL : /dashboard/admin/academy/tugas
    public $model = IconAcademyTask::class;

    public function columns()
    {
        return [
            Column::name('title')->label('Judul'),
            Column::name('task_type')->label('Tipe'),
            Column::name('description')->label('Deskripsi'),
            DateColumn::raw('deadline')
                ->label('Deadline')
                ->format('d M Y H:i:s')
                ->defaultSort('desc'),
            Column::callback(['id', 'question_file_path'], function ($id, $question_file_path) {
                return view('livewire.pages.icon.academy.admin.tugas.data-tables.actions', ['id' => $id, 'question_file_path' => $question_file_path]);
            })
        ];
    }
}
