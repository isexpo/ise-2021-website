<?php

namespace App\Http\Livewire\Pages\Icon\Jobfair\Admin\Lowongan\Peserta\DataTables;

use App\Models\IconJobfairLowonganMemberApply;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CustomDatatable extends LivewireDatatable
{
    public function builder()
    {
        return IconJobfairLowonganMemberApply::where('lowongan_id', $this->params)
        ->join('members', function($q){
            $q->on('members.id' , '=' , 'icon_jobfair_lowongan_member_applies.member_id');
        })
            ->join('jobfair_members', function($q){
                $q->on('members.id' , '=' , 'jobfair_members.member_id');
            })
        ->join('users', function($q){
            $q->on('users.userable_id', '=', 'icon_jobfair_lowongan_member_applies.member_id');
            $q->where('users.userable_type', '=', 'App\Models\Member');
        });
    }

    public function columns()
    {
        return [
            Column::name('users.name')->label('Name peserta'),
            Column::name('users.email')->label('Email peserta'),
            Column::name('members.jenjang')->label('jenjang'),
            Column::callback(['portfolio', 'personal_letter' ,'cv_path'], function ($portofolio, $personal_letter ,$cv_path) {
                return view('livewire.pages.icon.jobfair.admin.lowongan.peserta.data-tables.actions', ['portofolio' => $portofolio, 'personal_letter' => $personal_letter, 'cv_path' => $cv_path]);
            })
        ];
    }
}
