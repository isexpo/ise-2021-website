<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Submission\DataTables;

use App\Models\Bionix\Submission;
use Illuminate\Support\Facades\Storage;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use ZanySoft\Zip\Zip;

class Table extends LivewireDatatable
{
    public $withDownload = true;
    public $isDownloadError = false;

    public function builder()
    {
        if (strpos($this->params, 'Senior') !== false) {
            return Submission::where('submission_type', $this->params)
                ->where('team_type', 'App\Models\Bionix\TeamSeniorData')
                ->whereRaw('submissions.id in (select max(submissions.id) from submissions group by team_id)')
                ->join('team_senior_data as team', 'team.id', 'submissions.team_id');
        }
        if (strpos($this->params, 'Junior') !== false) {
            return Submission::where('submission_type', $this->params)
                ->where('team_type', 'App\Models\Bionix\TeamJuniorData')
                ->whereRaw('submissions.id in (select max(submissions.id) from submissions group by team_id)')
                ->join('team_junior_data as team', 'team.id', 'submissions.team_id');

        }
        return null;
    }

    public function columns()
    {
        $columns = [
            Column::checkbox(),
            DateColumn::raw('submissions.updated_at')
                ->label('Waktu Unggah')
                ->format('d M Y H:i:s')
                ->defaultSort('desc'),
            Column::raw('team.team_name')->label('Nama Tim')->searchable()

        ];
        if ($this->params == "Senior Penyisihan") {
            $columns = array_merge($columns, [BooleanColumn::raw('team.want_to_pay')->label('Bersedia Membayar')]);
        }
        if ($this->params == "Senior Semifinal") {
            $columns = array_merge($columns, [Column::raw('video_link')->label('Link Youtube')]);
        }
        $columns = array_merge($columns, [Column::callback(['file_path', 'video_link'], function ($file_path, $video_link) {
            return view('livewire.pages.bionix.admin.submission.data-tables.actions', ['file_path' => $file_path, 'video_link' => $video_link]);
        })]);
        return $columns;
    }

    public function downloadAll()
    {
        if (sizeof($this->selected) < 1) {
            return $this->isDownloadError = true;
        }
        $this->isDownloadError = false;
        Storage::disk('public')->makeDirectory('zip_dir');
        $zip_path = 'zip_dir/' . date('YmdHis') . '_BIONIX ' . str_replace((strpos($this->params, 'Senior') !== false) ? 'Senior' : 'Junior', (strpos($this->params, 'Senior') !== false) ? 'College' : 'Student', $this->params) . '.zip';
        $zip = Zip::create(Storage::disk('public')->path($zip_path));
        foreach ($this->selected as $selected) {
            $submission = Submission::find($selected);
            $zip->add(Storage::disk('public')->path($submission->file_path));
        }
        $zip->close();
        $this->emit('downloadUrl', asset('storage/' . $zip_path));
    }
}
