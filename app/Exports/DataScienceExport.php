<?php

namespace App\Exports;

use App\Models\Icon\IconAcademyDataScience;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataScienceExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return IconAcademyDataScience::selectRaw('users.name as Nama,
        users.email as Email,
        users.no_hp as `Nomor HP`,
        gender as `Jenis Kelamin`,
        institute_name as `Asal Institusi`,
        major as Jurusan,
        reason_joining_academy as `Alasan Mengikuti Academy`,
        post_academy_activity as `Pasca Academy`,
        hackerrank_profile_link as `Link Profil Hackerrank`,
        info_source,
        profile_verif_status as `Status Verifikasi Profil`,
        academy_status as `Tahap Academy`')
            ->leftJoin('members', function ($q) {
                $q->on('members.academy_id', '=', 'icon_academy_data_sciences.id');
                $q->where('members.academy_type', '=', 'App\Models\Icon\IconAcademyDataScience');
            })->leftJoin('users', function ($q) {
                $q->on('users.userable_id', '=', 'members.id');
                $q->where('users.userable_type', '=', 'App\Models\Member');
            })->get();
    }

    public function headings(): array
    {
        return ["Nama", "Email", "Nomor HP", "Jenis Kelamin", "Asal Institusi", "Jurusan", "Alasan Mengikuti Academy", "Pasca Academy", "Link Profil Hackerrank", "Sumber Informasi", "Status Verifikasi Profil", "Tahap Academy"];
    }
}
