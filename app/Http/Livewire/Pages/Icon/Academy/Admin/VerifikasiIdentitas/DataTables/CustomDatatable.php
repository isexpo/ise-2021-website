<?php


namespace App\Http\Livewire\Pages\Icon\Academy\Admin\VerifikasiIdentitas\DataTables;


use App\Models\Icon\IconAcademyStartup;
use App\Models\Icon\IconAcademyDataScience;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CustomDatatable extends LivewireDatatable
{
    //TODO (Putri) Verifikasi identitas
    //Modifikasi dari verifikasi identitas BIONIX
    //
    //URL : /dashboard/admin/academy/verifikasi/identitas
    public function builder()
    {
        if ($this->model == 'App\Models\Icon\IconAcademyStartup') {
            return IconAcademyStartup::query()
                ->where('icon_academy_startups.profile_verif_status', 'Tahap Verifikasi')
                ->leftJoin('icon_academy_startup_members as leader', 'leader.id', 'icon_academy_startups.leader_id')
                ->leftJoin('icon_academy_startup_members as member1', 'member1.id', 'icon_academy_startups.member1_id')
                ->leftJoin('icon_academy_startup_members as member2', 'member2.id', 'icon_academy_startups.member2_id');
        } elseif ($this->model == 'App\Models\Icon\IconAcademyDataScience') {
            return IconAcademyDataScience::query()
                ->where('icon_academy_data_sciences.profile_verif_status', 'Tahap Verifikasi')
                ->leftJoin('members', function ($q) {
                    $q->on('members.academy_id', '=', 'icon_academy_data_sciences.id');
                    $q->where('members.academy_type', '=', 'App\Models\Icon\IconAcademyDataScience');
                })->leftJoin('users', function ($q) {
                    $q->on('users.userable_id', '=', 'members.id');
                    $q->where('users.userable_type', '=', 'App\Models\Member');
                });
        }
        return null;
    }
    public function columns()
    {
        $column = [];
        if ($this->model == 'App\Models\Icon\IconAcademyStartup') {
            $column = [
                Column::name('team_name')->searchable()->label('Nama Tim'),
                Column::name('institute_name')->searchable()->label('Nama Institusi'),
                Column::name('leader.name')->searchable()->label('Nama Ketua'),
                Column::name('member1.name')->searchable()->label('Nama Member 1'),
                Column::name('member2.name')->searchable()->label('Nama Member 2'),
                Column::callback(['id'], function ($id) {
                    return view('livewire.pages.icon.academy.admin.verifikasi-identitas.data-tables.actions', ['id' => $id, 'type' => 'startup']);
                })
            ];
        } elseif ($this->model == 'App\Models\Icon\IconAcademyDataScience') {
            $column = [
                Column::name('users.name')->searchable()->label('Nama'),
                Column::name('institute_name')->searchable()->label('Nama Institusi'),
                Column::name('major')->searchable()->label('Jurusan'),
                Column::callback(['id'], function ($id) {
                    return view('livewire.pages.icon.academy.admin.verifikasi-identitas.data-tables.actions', ['id' => $id, 'type' => 'data-science']);
                })
            ];
        }
        return $column;
    }
}
