<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Home\DataTables;

use App\Exports\DataScienceExport;
use App\Exports\StartupExport;
use App\Models\IconHoisQuestMember;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class CustomDatatable extends LivewireDatatable
{

    public function builder()
    {

        if ($this->model == 'App\Models\IconHoisQuestMember') {

            return Member::query()
                ->leftJoin('users', function ($q) {
                    $q->on('users.userable_id', '=', 'members.id');
                    $q->where('users.userable_type', '=', 'App\Models\Member');
                });
        }
        //icon_academy_startup_members as leader', 'leader.id', 'icon_academy_startups.leader_id
        return null;
    }

    public function columns()
    {
        $column = [];
        if ($this->model == 'App\Models\IconHoisQuestMember') {
            $column = [
                Column::name('users.name')->label('Nama')->searchable(),
                Column::name('members.hois_point')->label('Point')->searchable()->defaultSort('desc')
            ];
        }
        return $column;
    }

    public function export()
    {
        if ($this->model == 'App\Models\Icon\IconAcademyStartup') {
            return Excel::download(new StartupExport, 'Icon Quest_' . Carbon::now() . '.xlsx');
        }
    }

    public function numberSequence($id)
    {
        $res = [];
        $limit = IconHoisQuestMember::count();
        $x = 1;
        while ($x <= $limit) {
            array_push($res, $x);
            $x++;
        }
        return $res;
    }
}
