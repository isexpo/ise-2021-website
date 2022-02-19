<?php

namespace App\Http\Livewire\Pages\Icon\Jobfair\Admin\Perusahaan\DataTables;

use App\Models\IconJobfairPerusahaan;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;

class CustomDatatable extends LivewireDatatable
{
    public $model = IconJobfairPerusahaan::class;

    public function columns()
    {
        return [

            Column::name('name')->label('Nama Perusahaan'),
            Column::callback(['company_url'], function ($company_url) {
                return '<a href="//'.$company_url.'/" target="_blank" class="text-blue-500 truncate">'.$company_url.'</a>' ;
            })->label('Website Perusahan'),
            Column::callback(['logo_path'], function($logo_path) {
                return "<a class='flex justify-content-center' target=_blank href='/storage/$logo_path'><button class='p-1 text-green-600 hover:bg-green-600 hover:text-white rounded'><i class='fas fa-cloud-download-alt'></i></button></a>";
            })->label('Unduh Logo'),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.icon.jobfair.admin.perusahaan.data-tables.actions', ['id' => $id]);
            })
        ];
    }
}

