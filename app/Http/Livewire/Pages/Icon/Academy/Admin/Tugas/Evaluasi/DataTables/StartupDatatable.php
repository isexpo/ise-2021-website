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

class StartupDatatable extends LivewireDatatable
{
    public $tugas_type = '';
    public $task;
    public $withDownload = true;
    public $isDownloadError = false;
    public function builder()
    {
        $this->task = IconAcademyTask::find($this->params);
        return IconAcademySubmission::where('task_id', $this->task->id)
            ->join('icon_academy_startups', 'icon_academy_submissions.member_id', 'icon_academy_startups.id');
    }

    public function columns()
    {
        return [
            Column::checkbox(),
            DateColumn::raw('submit_time')
                ->label('Waktu Unggah')
                ->format('d M Y H:i:s')
                ->defaultSort('desc'),
            Column::name('icon_academy_startups.team_name')->label('Nama Tim')->searchable(),
            BooleanColumn::raw('CASE WHEN evaluation_comment IS NOT NULL THEN 1 ELSE 0 END')->label('Sudah Dievaluasi')->filterable(),
            Column::callback(['id', 'file_path'], function ($id, $file_path) {
                return view('livewire.pages.icon.academy.admin.tugas.evaluasi.data-tables.actions', ['id' => $id, 'file_path' => $file_path]);
            })
        ];
    }

    public function downloadAll()
    {
        if (sizeof($this->selected) < 1) {
            return $this->isDownloadError = true;
        }
        $this->isDownloadError = false;
        Storage::disk('public')->makeDirectory('zip_dir');
        $zip_path = 'zip_dir/' . date('YmdHis') . '_Startup Academy_' . $this->task->title . '.zip';
        $zip = Zip::create(Storage::disk('public')->path($zip_path));
        foreach ($this->selected as $selected) {
            $submission = IconAcademySubmission::find($selected);
            $zip->add(Storage::disk('public')->path($submission->file_path));
        }
        $zip->close();
        $this->emit('downloadUrl', asset('storage/' . $zip_path));
        //        \Redirect::to(asset('storage/' . $zip_path));
    }
}
