<?php


namespace App\Http\Livewire\Pages\Bionix\Admin\VerifikasiIdentitas\DataTables;


use App\Models\Bionix\City;
use App\Models\Bionix\TeamJuniorData;
use App\Models\Bionix\TeamSeniorData;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CustomDatatable extends LivewireDatatable
{

    public function builder()
    {
        if ($this->model == 'App\Models\Bionix\TeamJuniorData') {
            return TeamJuniorData::query()
                ->where('profile_verif_status', 'Tahap Verifikasi')
                ->leftJoin('team_junior_members as leader_group', 'leader_group.id', 'team_junior_data.leader_id')
                ->leftJoin('team_junior_members as member_group', 'member_group.id', 'team_junior_data.member_id');
        } elseif ($this->model == 'App\Models\Bionix\TeamSeniorData') {
            return TeamSeniorData::query()
                ->where('profile_verif_status', 'Tahap Verifikasi')
                ->leftJoin('team_senior_members as leader', 'leader.id', 'team_senior_data.leader_id')
                ->leftJoin('team_senior_members as member1', 'member1.id', 'team_senior_data.member1_id')
                ->leftJoin('team_senior_members as member2', 'member2.id', 'team_senior_data.member2_id');
        }
        return null;
    }

    public function columns()
    {
        $column = [];
        if ($this->model == 'App\Models\Bionix\TeamJuniorData') {
            $column = [
                Column::name('team_name')->searchable()->label('Nama Tim'),
                Column::name('city.name')->label('Kab/Kota/Provinsi')->filterable($this->cities->pluck('name')),
                Column::name('school_name')->label('Nama Sekolah'),
                Column::name('leader_group.name')->label('Nama Ketua'),
                Column::name('member_group.name')->label('Nama Member'),
                Column::callback(['id'], function ($id) {
                    return view('livewire.pages.bionix.admin.verifikasi-identitas.data-tables.actions', ['id' => $id, 'type' => 'student']);
                })
            ];
        } elseif ($this->model == 'App\Models\Bionix\TeamSeniorData') {
            $column = [
                Column::name('team_name')->searchable()->label('Nama Tim'),
                Column::name('city.name')->label('Kab/Kota/Provinsi')->filterable($this->cities->pluck('name')),
                Column::name('university_name')->label('Nama Universitas'),
                Column::name('leader.name')->label('Nama Ketua'),
                Column::name('member1.name')->label('Nama Member 1'),
                Column::name('member2.name')->label('Nama Member 2'),
                Column::callback(['id'], function ($id) {
                    return view('livewire.pages.bionix.admin.verifikasi-identitas.data-tables.actions', ['id' => $id, 'type' => 'college']);
                })
            ];
        }
        return $column;
    }

    public function getCitiesProperty()
    {
        return City::query();
    }
}
