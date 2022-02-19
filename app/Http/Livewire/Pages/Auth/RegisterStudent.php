<?php

namespace App\Http\Livewire\Pages\Auth;

use App\Models\Bionix\City;
use App\Models\Bionix\TeamJuniorData;
use App\Models\Bionix\TeamJuniorMember;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;

class RegisterStudent extends Component
{
    public $cities;
    public $step = 1;
    public $isIdentityDone = false;
    public $isAnggotaDone = false;
    public $isAkunDone = false;
    public $errorMessage;
    public $team_name, $info_source, $member_1_name, $member_2_name, $member_1_email, $member_2_email, $member_1_whatsapp, $member_2_whatsapp, $member_1_class, $member_2_class, $school_name, $school_city, $password, $re_password, $region = 'Region 1', $agree;
    public $with_member;

    public function move($toStep)
    {
        if ($toStep == 1) {
            $this->step = $toStep;
            $this->errorMessage = '';
        } elseif ($toStep == 2) {
            if ($this->isIdentityDone) {
                $this->step = $toStep;
                $this->errorMessage = '';
            } else {
                $this->errorMessage = "Harap selesaikan tahap 1 terlebih dahulu";
            }
        } elseif ($toStep == 3) {
            if ($this->isAnggotaDone) {
                $this->step = $toStep;
                $this->errorMessage = '';
            } else {
                $this->errorMessage = "Harap selesaikan tahap 2 terlebih dahulu";
            }
        }
    }


    public function setCity($city_id)
    {
        $this->school_city = $city_id;
    }

    public function identityTeamSubmit()
    {
        $validatedData = $this->validate([
            'team_name' => 'required',
            'school_name' => 'required',
            'school_city' => 'required',
            'info_source' => 'required'
        ]);
        $this->isIdentityDone = true;
        $this->move(2);
    }

    public function anggotaTeamSubmit()
    {
        $validatedData = $this->validate([
            'member_1_name' => 'required',
            'member_2_name' => 'required',
            'member_1_email' => 'required|email',
            'member_2_email' => 'required|email|unique:users,email|unique:team_senior_members,email|unique:team_junior_members',
            'member_1_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'member_2_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'member_1_class' => 'required',
            'member_2_class' => 'required',
        ]);
        if ($this->member_1_email == $this->member_2_email) {
            $this->errorMessage = "Email kedua peserta tidak boleh sama";
            return;
        }
        $this->isAnggotaDone = true;
        $this->move(3);
    }

    public function akunSubmit()
    {
        $this->with_member = false;
        $arr_validation = [
            'team_name' => 'required',
            'school_name' => 'required',
            'school_city' => 'required',
            'member_1_name' => 'required',
            'member_1_email' => 'required|email|unique:team_senior_members,email|unique:team_junior_members,email',
            'member_1_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
            'member_1_class' => 'required',

        ];
        if ($this->member_2_email || $this->member_2_name || $this->member_2_whatsapp || $this->member_2_class) {
            $arr_validation = array_merge($arr_validation, [
                'member_2_name' => 'required',
                'member_2_email' => 'required|email|unique:team_senior_members,email|unique:team_junior_members,email',
                'member_2_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
                'member_2_class' => 'required',

            ]);
            $this->with_member = true;
        }
        $this->validate($arr_validation);
        if ($this->with_member && $this->member_1_email == $this->member_2_email) {
            $this->errorMessage = "Email kedua peserta tidak boleh sama";
            return;
        }

        if (!$this->agree) {
            $this->errorMessage = 'Tolong setujui syarat dan ketentuan';
            return;
        }
        $this->isAkunDone = true;
        \Auth::user()->update(['name' => $this->member_1_name,
            'no_hp' => $this->member_1_whatsapp]);
        //masukin ke database di sini bikin create
        $team_member_1 = TeamJuniorMember::create([
            'name' => $this->member_1_name,
            'email' => $this->member_1_email,
            'class' => $this->member_1_class,
            'whatsapp' => $this->member_1_whatsapp
        ])->id;
        $team_member_2 = null;
        if ($this->with_member) {
            $team_member_2 = TeamJuniorMember::create([
                'name' => $this->member_2_name,
                'email' => $this->member_2_email,
                'class' => $this->member_2_class,
                'whatsapp' => $this->member_2_whatsapp
            ])->id;
        }
        $team_data = TeamJuniorData::create([
            'team_name' => $this->team_name,
            'info_source' => $this->info_source,
            'school_name' => $this->school_name,
            'city_id' => $this->school_city,
            'competition_round' => 'Penyisihan 1',
            'leader_id' => $team_member_1,
            'member_id' => $team_member_2
        ]);
        \Auth::user()->userable->update([
            'bionix_id' => $team_data->id,
            'bionix_type' => 'App\Models\Bionix\TeamJuniorData'
        ]);

        return redirect()->to(route('bionix.peserta.homepage'));
    }

    public function getRegion($city_id)
    {
        foreach ($this->cities as $city) {
            if ($city->id == $city_id) {
                $this->region = $city->region;
                break;
            }
        }
    }

    public function mount()
    {
        $this->cities = City::orderBy('region')->get();
        $this->school_city = $this->cities[0]->id;
        $this->info_source = 'Media Sosial ISE! 2021';

        $this->member_1_name = \Auth::user()->name;
        $this->member_1_email = \Auth::user()->email;
        $this->member_1_whatsapp = \Auth::user()->no_hp;
    }

    public function closeModal()
    {
        $this->errorMessage = '';
        $this->resetErrorBag();
    }

    public function render()
    {
        return view('livewire.pages.auth.register-student')->layout('layouts.guest');;
    }
}
