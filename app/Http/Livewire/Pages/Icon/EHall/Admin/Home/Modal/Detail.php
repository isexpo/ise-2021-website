<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Home\Modal;

use App\Models\Icon\IconAcademyDataScience;
use App\Models\Icon\IconAcademyStartup;
use App\Models\IconHoisQuestMember;
use LivewireUI\Modal\ModalComponent;

class Detail extends ModalComponent
{
    public $icon_data;
    public $type;
    public $hois_point;
    public $hois_name;

    public function mount($type, $id)
    {
        $this->type = $type;
        $this->icon_data = IconHoisQuestMember::find($id);

        //$this->member1_name = ($type == 'startup' ? $this->icon_data->leader->name : $this->icon_data->user->name);

        if ($this->type == 'e-hall') {
            $this->hois_point = $this->icon_data->members->hois_point;
            $this->hois_name = $this->icon_data->userData->name;
        }
    }

    public function render()
    {
        return view('livewire.pages.icon.e-hall.admin.home.modal.detail');
    }

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }
}
