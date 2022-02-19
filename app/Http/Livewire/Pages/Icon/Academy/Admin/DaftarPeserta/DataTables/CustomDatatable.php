<?php
namespace App\Http\Livewire\Pages\Icon\Academy\Admin\DaftarPeserta\DataTables;
use App\Exports\DataScienceExport;
use App\Exports\StartupExport;
use App\Models\Icon\IconAcademyStartup;
use App\Models\Icon\IconAcademyDataScience;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class CustomDatatable extends LivewireDatatable
{
    public $exportable = true;
    public $withUbahStatus=true;
    public $radioName;
    public $status=['Proses Seleksi','Lolos','Tidak Lolos'];
    public $statusValue='Proses Seleksi';


    public function builder()
    {

        if ($this->model == 'App\Models\Icon\IconAcademyStartup') {
            return IconAcademyStartup::query()
                ->leftJoin('icon_academy_startup_members as leader', 'leader.id', 'icon_academy_startups.leader_id')
                ->leftJoin('icon_academy_startup_members as member1', 'member1.id', 'icon_academy_startups.member1_id')
                ->leftJoin('icon_academy_startup_members as member2', 'member2.id', 'icon_academy_startups.member2_id');
        } elseif ($this->model == 'App\Models\Icon\IconAcademyDataScience') {

            return IconAcademyDataScience::query()
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
                Column::checkbox(),
                Column::raw('Concat("STR",
                                    IF(`icon_academy_startups`.`id`<10,concat("000",`icon_academy_startups`.`id`),
                                        IF(`icon_academy_startups`.`id`>=10 AND `icon_academy_startups`.`id`<100,concat("00",`icon_academy_startups`.`id`),
                                            IF(`icon_academy_startups`.`id`>=100 AND `icon_academy_startups`.`id`<1000,concat("0",`icon_academy_startups`.`id`),`icon_academy_startups`.`id`)
                                        )
                                    )
                                 ) AS nomor')->searchable()->defaultSort('asc'),
                Column::name('team_name')->searchable()->label('Nama Tim')->searchable(),
                Column::name('institute_name')->label('Nama Institusi')->searchable(),
                Column::name('leader.name')->label('Nama Ketua')->searchable(),
                Column::name('member1.name')->label('Nama Member 1')->searchable(),
                Column::name('member2.name')->label('Nama Member 2')->searchable(),
                Column::name('profile_verif_status')->label('Status Verifikasi Biodata')->filterable(['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak']),
                Column::name('academy_status')->label('Status Academy')->filterable(['Proses Seleksi', 'Lolos', 'Tidak Lolos']),
                Column::raw('date_format(icon_academy_startups.created_at,"%d %b %Y %H:%i:%s")')->sortBy('date_format(icon_academy_startups.created_at,"%d %b %Y %H:%i:%s")')->label("Waktu Pendaftaran"),
                Column::callback(['id'], function ($id) {
                    return view('livewire.pages.icon.academy.admin.daftar-peserta.data-tables.actions', ['id' => $id, 'type' => 'startup']);
                })
            ];
        } elseif ($this->model == 'App\Models\Icon\IconAcademyDataScience') {
            $column = [
                Column::checkbox(),
                Column::raw('Concat("DSC",
                                    IF(`icon_academy_data_sciences`.`id`<10,concat("000",`icon_academy_data_sciences`.`id`),
                                        IF(`icon_academy_data_sciences`.`id`>=10 AND `icon_academy_data_sciences`.`id`<100,concat("00",`icon_academy_data_sciences`.`id`),
                                            IF(`icon_academy_data_sciences`.`id`>=100 AND `icon_academy_data_sciences`.`id`<1000,concat("0",`icon_academy_data_sciences`.`id`),`icon_academy_data_sciences`.`id`)
                                        )
                                    )
                                 ) AS nomor')->searchable()->defaultSort('asc'),
                Column::name('users.name')->label('Nama')->searchable(),
                Column::name('institute_name')->label('Nama Institusi')->searchable(),
                Column::name('major')->label('Jurusan')->searchable(),
                Column::name('gender')->label('Jenis Kelamin')->filterable(['Laki-laki', 'Perempuan']),
                Column::name('profile_verif_status')->label('Status Verifikasi Biodata')->filterable(['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak']),
                Column::name('academy_status')->label('Status Academy')->filterable(['Proses Seleksi', 'Lolos', 'Tidak Lolos']),
                Column::raw('date_format(icon_academy_data_sciences.created_at,"%d %b %Y %H:%i:%s")')->sortBy('date_format(icon_academy_data_sciences.created_at,"%d %b %Y %H:%i:%s")')->label("Waktu Pendaftaran"),
                Column::callback(['id'], function ($id) {
                    return view('livewire.pages.icon.academy.admin.daftar-peserta.data-tables.actions', ['id' => $id, 'type' => 'data-science']);
                })
            ];
        }
        return $column;
    }

    public function export(){
        if ($this->model == 'App\Models\Icon\IconAcademyStartup') {
            return Excel::download(new StartupExport, 'Startup Academy_'.Carbon::now().'.xlsx');
        }
        elseif($this->model == 'App\Models\Icon\IconAcademyDataScience'){
            return Excel::download(new DataScienceExport, 'Data Science Academy_'.Carbon::now().'.xlsx');

        }

    }

    public function numberSequence($id)
    {
        $res = [];
        $limit = IconAcademyStartup::count();
        $x = 1;
        while ($x <= $limit) {
            array_push($res, $x);
            $x++;
        }
        return $res;
    }

    public function saveStatus(){
        foreach ($this->selected as $selected){
            if ($this->model == 'App\Models\Icon\IconAcademyStartup') {
                IconAcademyStartup::find($selected)->update(
                    [
                        'academy_status'=>$this->statusValue
                    ]);
            }
            elseif ($this->model == 'App\Models\Icon\IconAcademyDataScience') {
                IconAcademyDataScience::find($selected)->update(
                    [
                        'academy_status'=>$this->statusValue
                    ]);
            }
        }
        $this->emit('refreshLivewireDatatable');
    }
}
