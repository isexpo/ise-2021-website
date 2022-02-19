<?php

namespace App\Exports;

use App\Models\Icon\IconFeedback;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class IconFeedbackExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return IconFeedback::select('created_at', 'feedback')->orderBy('id')->get();
    }

    public function headings(): array
    {
        return ['Waktu', 'Masukan'];
    }
}
