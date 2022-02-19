<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\VerifikasiPembayaran\Modal;

use App\Models\Bionix\TeamJuniorData;
use App\Models\Bionix\TeamSeniorData;
use LivewireUI\Modal\ModalComponent;

class ShowDetails extends ModalComponent
{
    public $bionix_data;
    public $type;
    public $payment_proof;
    public
        $member1_name,
        $school_name,
        $school_city,
        $team_name;

    public function mount($type, $id)
    {
        $this->type=$type;
        $this->bionix_data = ($type == 'student' ? TeamJuniorData::find($id) : TeamSeniorData::find($id));
        $this->team_name = $this->bionix_data->team_name;
        $this->member1_name = $this->bionix_data->leader->name;
        $this->school_name = ($type == 'student' ? $this->bionix_data->school_name : $this->bionix_data->university_name);
        $this->school_city = $this->bionix_data->city;
        $this->payment_proof = $this->bionix_data->payment_proof_path;
    }

    public function render()
    {
        return view('livewire.pages.bionix.admin.verifikasi-pembayaran.modal.show-details');
    }

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }
}
