<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\DaftarPeserta\Modal;

use App\Models\Icon\IconAcademyDataScience;
use App\Models\Icon\IconAcademyStartup;
use LivewireUI\Modal\ModalComponent;

class Edit extends ModalComponent
{
    public $icon_data;
    public $anggota_1;
    public $anggota_2;
    public $anggota_3;
    public $nama_institusi;
    public $type;

    public function mount($id, $type)
    {
        $this->type = $type;
        if ($type == 'startup') {
            $this->icon_data = IconAcademyStartup::find($id);
            $this->anggota_1 = $this->icon_data->leader->name;
            $this->anggota_2 = $this->icon_data->member_1->name;
            $this->anggota_3 = $this->icon_data->member_2->name;
        } elseif ($type == 'data-science') {
            $this->icon_data = IconAcademyDataScience::find($id);
            $this->anggota_1 = $this->icon_data->memberData->userData->name;
        }
        $this->nama_institusi = $this->icon_data->institute_name;
    }

    public function submit()
    {
        if ($this->type == 'startup' && $this->anggota_3 !== null) {
            $this->validate([
                'anggota_1' => 'required|string',
                'anggota_2' => 'required|string',
                'anggota_3' => 'required|string',
                'nama_institusi' => 'required|string'
            ]);
            $this->icon_data->leader->name = $this->anggota_1;
            $this->icon_data->leader->save();
            $this->icon_data->member_1->name = $this->anggota_2;
            $this->icon_data->member_1->save();
            $this->icon_data->member_2->name = $this->anggota_3;
            $this->icon_data->member_2->save();
            $this->icon_data->institute_name = $this->nama_institusi;
            $this->icon_data->save();
        } elseif ($this->type == 'startup' && $this->anggota_3 == null) {
            $this->validate([
                'anggota_1' => 'required|string',
                'anggota_2' => 'required|string',
                'nama_institusi' => 'required|string'
            ]);
            $this->icon_data->leader->name = $this->anggota_1;
            $this->icon_data->leader->save();
            $this->icon_data->member_1->name = $this->anggota_2;
            $this->icon_data->member_1->save();
            $this->icon_data->institute_name = $this->nama_institusi;
            $this->icon_data->save();
        } elseif ($this->type == 'data-science') {
            $this->validate([
                'anggota_1' => 'required|string',
                'nama_institusi' => 'required|string'
            ]);
            $this->icon_data->memberData->userData->name = $this->anggota_1;
            $this->icon_data->memberData->userData->save();
            $this->icon_data->institute_name = $this->nama_institusi;
            $this->icon_data->save();
        }
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.academy.admin.daftar-peserta.modal.edit');
    }
}
