<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\VerifikasiIdentitas\Modal;

use App\Models\Bionix\TeamJuniorData;
use App\Models\Bionix\TeamSeniorData;
use LivewireUI\Modal\ModalComponent;

class ShowDetails extends ModalComponent
{
    public $bionix_data;
    public $type;
    public $photo1;
    public $photo2;
    public $photo3;
    public $info_source,
        $member1_name,
        $member2_name,
        $member3_name,
        $member1_email,
        $member2_email,
        $member3_email,
        $member1_whatsapp,
        $member2_whatsapp,
        $member3_whatsapp,
        $member1_twibbon,
        $member2_twibbon,
        $member3_twibbon,
        $member1_major,
        $member2_major,
        $member3_major,
        $member1_year,
        $member2_year,
        $member3_year,
        $school_name,
        $school_city,
        $team_name;

    public function mount($type, $id)
    {
        $this->type = $type;
        $this->bionix_data = ($type == 'student' ? TeamJuniorData::find($id) : TeamSeniorData::find($id));
        $this->team_name = $this->bionix_data->team_name;
        $this->info_source = $this->bionix_data->info_source;
        $this->member1_name = $this->bionix_data->leader->name;
        $this->member1_email = $this->bionix_data->leader->email;
        $this->member1_whatsapp = $this->bionix_data->leader->whatsapp;
        $this->member1_twibbon = ($type == 'student' ? null : $this->bionix_data->leader->link_twibbon);
        $this->school_name = ($type == 'student' ? $this->bionix_data->school_name : $this->bionix_data->university_name);
        $this->school_city = $this->bionix_data->city;
        $this->photo1 = $this->bionix_data->leader->identity_card_path;

        $this->member2_name = ($type == 'student' ? ($this->bionix_data->member ? $this->bionix_data->member->name : null) : ($this->bionix_data->member_1 ? $this->bionix_data->member_1->name : null));
        $this->member3_name = ($type == 'student' ? null : ($this->bionix_data->member_2 ? $this->bionix_data->member_2->name : null));
        $this->member2_email = ($type == 'student' ? ($this->bionix_data->member ? $this->bionix_data->member->email : null) : ($this->bionix_data->member_1 ? $this->bionix_data->member_1->email : null));
        $this->member3_email = ($type == 'student' ? null : ($this->bionix_data->member_2 ? $this->bionix_data->member_2->email : null));
        $this->member2_whatsapp = ($type == 'student' ? ($this->bionix_data->member ? $this->bionix_data->member->whatsapp : null) : ($this->bionix_data->member_1 ? $this->bionix_data->member_1->whatsapp : null));
        $this->member3_whatsapp = ($type == 'student' ? null : ($this->bionix_data->member_2 ? $this->bionix_data->member_2->whatsapp : null));
        $this->photo2 = ($type == 'student' ? ($this->bionix_data->member ? $this->bionix_data->member->identity_card_path : null) : ($this->bionix_data->member_1 ? $this->bionix_data->member_1->identity_card_path : null));
        $this->photo3 = ($type == 'student' ? null : ($this->bionix_data->member_2 ? $this->bionix_data->member_2->identity_card_path : null));
        $this->member2_twibbon = ($type == 'student' ? null : ($this->bionix_data->member_1 ? $this->bionix_data->member_1->link_twibbon : null));
        $this->member3_twibbon = ($type == 'student' ? null : ($this->bionix_data->member_2 ? $this->bionix_data->member_2->link_twibbon : null));

        $this->member1_major = ($type == 'student' ? null : $this->bionix_data->leader->major);
        $this->member2_major = ($type == 'student' ? null : ($this->bionix_data->member_1 ? $this->bionix_data->member_1->major : null));
        $this->member3_major = ($type == 'student' ? null : ($this->bionix_data->member_2 ? $this->bionix_data->member_2->major : null));
        $this->member1_year = ($type == 'student' ? null : $this->bionix_data->leader->year);
        $this->member2_year = ($type == 'student' ? null : ($this->bionix_data->member_1 ? $this->bionix_data->member_1->year : null));
        $this->member3_year = ($type == 'student' ? null : ($this->bionix_data->member_2 ? $this->bionix_data->member_2->year : null));
    }

    public function render()
    {
        return view('livewire.pages.bionix.admin.verifikasi-identitas.modal.show-details');
    }

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }
}
