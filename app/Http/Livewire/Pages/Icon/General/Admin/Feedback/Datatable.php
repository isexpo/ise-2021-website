<?php

namespace App\Http\Livewire\Pages\Icon\General\Admin\Feedback;

use App\Exports\IconFeedbackExport;
use App\Models\Icon\IconFeedback;
use Carbon\Carbon;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Datatable extends LivewireDatatable
{
    public $model = IconFeedback::class;
    public $exportable = true;

    public function columns()
    {
        return [
            DateColumn::raw('created_at')
                ->label('Waktu')
                ->format('d M Y H:i:s')
                ->defaultSort('desc')->filterable(),
            Column::name('feedback')->label('Masukan')->searchable()
        ];
    }

    public function export()
    {
        return Excel::download(new IconFeedbackExport, 'Feedback_' . Carbon::now() . '.xlsx');
    }
}
