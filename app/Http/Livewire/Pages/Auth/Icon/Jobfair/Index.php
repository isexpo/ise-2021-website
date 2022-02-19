<?php

namespace App\Http\Livewire\Pages\Auth\Icon\Jobfair;

use App\Models\JobfairMember;
use Livewire\Component;

class Index extends Component
{
    public $name,
        $email,
        $birth_place,
        $birth_date,
        $address,
        $identity_address,
        $last_education,
        $curr_education,
        $institute_name,
        $major,
        $semester,
        $social_media;
    public $errorMessage;

    public function mount()
    {
        $this->name = \Auth::user()->name;
        $this->email = \Auth::user()->email;
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required',
            'birth_place' => 'required|string',
            'birth_date' => 'required|date',
            'address' => 'required|string',
            'identity_address' => 'required|string',
            'last_education' => 'required|string',
            'curr_education' => 'required|string',
            'institute_name' => 'required|string',
            'major' => 'required|string',
            'social_media'=>'required|string'
        ]);

        JobfairMember::create([
            'member_id' => \Auth::user()->userable_id,
            'tempat_lahir' => $this->birth_place,
            'tanggal_lahir' => date('Y-m-d', strtotime($this->birth_date)),
            'alamat_domisili' => $this->address,
            'alamat_ktp' => $this->identity_address,
            'pendidikan_terakhir' => $this->last_education,
            'pendidikan_saat_ini' => $this->curr_education,
            'instansi_pendidikan_saat_ini' => $this->institute_name,
            'jurusan' => $this->major,
            'semester' => $this->semester == 0 || !$this->semester ? null : $this->semester,
            'social_media'=>$this->social_media
        ]);
        $this->redirect(route('icon.peserta.jobfair.biodata'));
    }

    public function render()
    {
        return view('livewire.pages.auth.icon.jobfair.index')->layout('layouts.guest');
    }
}
