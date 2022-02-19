<?php

namespace App\Http\Livewire\Pages\Icon\Talkshow\Admin\DaftarPeserta\DataTables;

use App\Models\IconTalkshowMember;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CustomDatatable extends LivewireDatatable
{
    public function builder()
    {

        return IconTalkshowMember::join('members', function ($q) {
                $q->on('members.id', '=', 'icon_talkshow_members.member_id');
            })->join('users', function ($q) {
                $q->on('users.userable_id', '=', 'members.id');
                $q->where('users.userable_type', '=', 'App\Models\Member');
            });
    }

    public function columns()
    {
        return [
            Column::name('users.name')->label('Nama')->searchable(),
            Column::name('institute_name')->label('Nama Institusi')->searchable(),
            Column::name('info_source')->label('Informasi Asal')->filterable(["Media Sosial ISE! 2021",
                "Media Sosial selain ISE! 2021 (info lomba, dll)",
                "Roadshow ISE! 2021",
                "Grup WA/Line/dll",
                "Sekolah (guru, dll)",
                "Teman/keluarga",
                "Website/Aplikasi Sejuta Cita"]),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.icon.talkshow.admin.daftar-peserta.data-tables.actions', ['id' => $id]);
            })
        ];
    }
}
