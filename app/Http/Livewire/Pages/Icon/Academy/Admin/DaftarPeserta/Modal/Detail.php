<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\DaftarPeserta\Modal;

use App\Models\Icon\IconAcademyDataScience;
use App\Models\Icon\IconAcademyStartup;
use LivewireUI\Modal\ModalComponent;

class Detail extends ModalComponent
{
    public $icon_data;
    public $type;
    public $photo1;
    public $photo2;
    public $photo3;
    public $member1_name,
        $ds_name,
        $member2_name,
        $member3_name,
        $member1_email,
        $member2_email,
        $member3_email,
        $ds_email,
        $member1_whatsapp,
        $member2_whatsapp,
        $member3_whatsapp,
        $member1_twibbon,
        $member2_twibbon,
        $member3_twibbon,
        $no_hp,
        $institute_name,
        $major,
        $team_name,
        $payment_proof,
        $startup_idea,
        $reason_joining_academy,
        $expectation_joining_academy,
        $post_academy_activity,
        $hackerrank_profile_link,
        $cv,
        $info_source;

    public function mount($type, $id)
    {
        $this->type = $type;
        $this->icon_data = ($type == 'startup' ? IconAcademyStartup::find($id) : IconAcademyDataScience::find($id));

        //$this->member1_name = ($type == 'startup' ? $this->icon_data->leader->name : $this->icon_data->user->name);

        if ($this->type == 'startup') {
            $this->team_name = $this->icon_data->team_name;
            $this->member1_name = $this->icon_data->leader->name;
            $this->member2_name = $this->icon_data->member_1->name;
            $this->member1_whatsapp = $this->icon_data->leader->whatsapp;
            $this->member2_whatsapp = $this->icon_data->member_1->whatsapp;
            $this->member1_email = $this->icon_data->leader->email;
            $this->member2_email = $this->icon_data->member_1->email;
            $this->photo1 = $this->icon_data->leader->identity_card_path;
            $this->photo2 = $this->icon_data->member_1->identity_card_path;
            $this->member1_twibbon = $this->icon_data->leader->link_twibbon;
            $this->member2_twibbon = $this->icon_data->member_1->link_twibbon;
            $this->startup_idea = $this->icon_data->startup_idea;
            $this->expectation_joining_academy = $this->icon_data->expectation_joining_academy;
            $this->member3_name = ($this->icon_data->member_2 ? $this->icon_data->member_2->name : null);
            $this->member3_whatsapp = ($this->icon_data->member_2 ? $this->icon_data->member_2->whatsapp : null);
            $this->member3_email = ($this->icon_data->member_2 ? $this->icon_data->member_2->email : null);
            $this->member3_twibbon = ($this->icon_data->member_2 ? $this->icon_data->member_2->link_twibbon : null);
            $this->photo3 = ($this->icon_data->member_2 ? $this->icon_data->member_2->identity_card_path : null);
        } elseif ($this->type == 'data-science') {
            $this->ds_name = $this->icon_data->memberData->userData->name;
            $this->ds_email = $this->icon_data->memberData->userData->email;
            $this->no_hp = $this->icon_data->memberData->userData->no_hp;
            $this->photo1 = $this->icon_data->identity_card_path;
            $this->member1_twibbon = $this->icon_data->link_twibbon;
            $this->hackerrank_profile_link = $this->icon_data->hackerrank_profile_link;
            $this->major = $this->icon_data->major;
            $this->cv = $this->icon_data->cv_path;
        }
        $this->info_source = $this->icon_data->info_source;
        $this->institute_name = $this->icon_data->institute_name;
        $this->startup_idea = $this->icon_data->startup_idea;
        $this->reason_joining_academy = $this->icon_data->reason_joining_academy;
        $this->post_academy_activity = $this->icon_data->post_academy_activity;
        $this->payment_proof = $this->icon_data->payment_proof_path;
    }

    public function render()
    {
        return view('livewire.pages.icon.academy.admin.daftar-peserta.modal.detail');
    }

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }
}

