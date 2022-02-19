<?php

namespace App\Exports;

use App\Models\Icon\IconAcademyStartup;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StartupExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return ["Nama Tim", "Asal Institusi", "Nama Anggota 1 (Ketua)", "Email Anggota 1 (Ketua)", "Nomor HP Anggota 1 (Ketua)", "Nama Anggota 2", "Email Anggota 2", "Nomor HP Anggota 2", "Nama Anggota 3", "Email Anggota 3", "Nomor HP Anggota 3", "Ide Startup", "Alasan Mengikuti Academy", "Ekspetasi Mengikuti Academy", "Pasca Academy", "Sumber Informasi", "Status Verifikasi Profil", "Tahap Academy"];
    }

    public function collection()
    {
        return IconAcademyStartup::selectRaw('team_name,
        institute_name,
        leader.name as nama_ketua,
        leader.email as email_ketua,
        leader.whatsapp as no_hp_ketua,
        member1.name as nama_member_1,
        member1.email as email_member_1,
        member1.whatsapp as no_hp_member_1,
        member2.name as nama_member_2,
        member2.email as email_member_2,
        member2.whatsapp as no_hp_member_2,
        startup_idea,
        reason_joining_academy,
        expectation_joining_academy,
        post_academy_activity,
        info_source,
        profile_verif_status,
        academy_status')
            ->leftJoin('icon_academy_startup_members as leader', 'leader.id', 'icon_academy_startups.leader_id')
            ->leftJoin('icon_academy_startup_members as member1', 'member1.id', 'icon_academy_startups.member1_id')
            ->leftJoin('icon_academy_startup_members as member2', 'member2.id', 'icon_academy_startups.member2_id')
            ->get();
    }
}
