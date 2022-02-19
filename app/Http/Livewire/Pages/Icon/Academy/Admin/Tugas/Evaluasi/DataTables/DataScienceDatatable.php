<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Tugas\Evaluasi\DataTables;

use App\Models\Icon\IconAcademySubmission;
use App\Models\Icon\IconAcademyTask;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use ZanySoft\Zip\Zip;

class DataScienceDatatable extends LivewireDatatable
{

    public $task;
    public $withDownload = true;
    public $isDownloadError = false;

    public function builder()
    {
        $this->task = IconAcademyTask::find($this->params);
        return IconAcademySubmission::where('task_id', $this->task->id)
            ->join('icon_academy_data_sciences', 'icon_academy_submissions.member_id', 'icon_academy_data_sciences.id')
            ->join('members', function ($q) {
                $q->on('members.academy_id', '=', 'icon_academy_data_sciences.id');
                $q->where('members.academy_type', '=', 'App\Models\Icon\IconAcademyDataScience');
            })->join('users', function ($q) {
                $q->on('users.userable_id', '=', 'members.id');
                $q->where('users.userable_type', '=', 'App\Models\Member');
            });
    }

    public function columns()
    {
        return [
            Column::checkbox(),
            DateColumn::raw('submit_time')
                ->label('Waktu Unggah')
                ->format('d M Y H:i:s')
                ->defaultSort('desc'),
            Column::name('users.name')->label('Nama Tim')->searchable(),
            BooleanColumn::raw('CASE WHEN evaluation_comment IS NOT NULL THEN 1 ELSE 0 END')->label('Sudah Dievaluasi')->filterable(),
            Column::callback(['id', 'file_path'], function ($id, $file_path) {
                return view('livewire.pages.icon.academy.admin.tugas.evaluasi.data-tables.actions', ['id' => $id, 'file_path' => $file_path]);
            })
        ];
    }
}
