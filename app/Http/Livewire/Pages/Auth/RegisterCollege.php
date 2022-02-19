<?php

namespace App\Http\Livewire\Pages\Auth;

use App\Models\Bionix\City;
use App\Models\Bionix\TeamSeniorData;
use App\Models\Bionix\TeamSeniorMember;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;

class RegisterCollege extends Component
{
    public $cities;
    public $step = 1;
    public $isIdentityDone = false;
    public $isAnggotaDone = false;
    public $isAkunDone = false;
    public $errorMessage;
    public $team_name,
        $info_source,
        $member_1_name,
        $member_2_name,
        $member_3_name,
        $member_1_email,
        $member_2_email,
        $member_3_email,
        $member_1_whatsapp,
        $member_2_whatsapp,
        $member_3_whatsapp,
        $university_name,
        $university_city,
        $password,
        $re_password,
        $agree,
        $member_1_twibbon,
        $member_2_twibbon,
        $member_3_twibbon,
        $member_1_major,
        $member_2_major,
        $member_3_major,
        $member_1_year,
        $member_2_year,
        $member_3_year;
    public $with_member_2 = false, $with_member_3 = false;

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


    public function identityTeamSubmit()
    {
        $validatedData = $this->validate([
            'team_name' => 'required',
            'university_name' => 'required',
            'university_city' => 'required',
        ]);
        $this->isIdentityDone = true;
        $this->move(2);
    }

    public function anggotaTeamSubmit()
    {
        $validatedData = $this->validate([
            'member_1_name' => 'required',
            'member_2_name' => 'required',
            'member_3_name' => 'required',
            'member_1_email' => 'required|email',
            'member_2_email' => 'required|email|unique:team_senior_members,email|unique:team_junior_members',
            'member_3_email' => 'required|email|unique:team_senior_members,email|unique:team_junior_members',
            'member_1_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'member_2_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'member_3_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'member_1_twibbon' => 'required|url',
            'member_2_twibbon' => 'required|url',
            'member_3_twibbon' => 'required|url',
            'info_source' => 'required'
        ]);
        if (($this->member_1_email == $this->member_2_email) || ($this->member_1_email == $this->member_3_email) || $this->member_3_email == $this->member_2_email) {
            $this->errorMessage = "Email masing-masing peserta tidak boleh sama";
            return;
        }
        $this->isAnggotaDone = true;
        $this->move(3);
    }

    public function akunSubmit()
    {
        $this->with_member_2 = false;
        $this->with_member_3 = false;
        $arr_validation = [
            'team_name' => 'required',
            'university_name' => 'required',
            'university_city' => 'required',
            'member_1_name' => 'required',
            'member_1_email' => 'required|email|unique:team_senior_members,email|unique:team_junior_members,email',
            'member_1_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
            'member_1_twibbon' => 'required|url',
            'member_1_year' => 'required|integer|min:2000',
            'member_1_major' => 'required|string',
        ];
        if ($this->member_2_email || $this->member_2_name || $this->member_2_twibbon || $this->member_2_whatsapp || $this->member_2_year || $this->member_2_major) {
            $arr_validation = array_merge($arr_validation, [
                'member_2_name' => 'required',
                'member_2_email' => 'required|email|unique:team_senior_members,email|unique:team_junior_members,email',
                'member_2_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
                'member_2_twibbon' => 'required|url',
                'member_2_year' => 'required|integer|min:2000',
                'member_2_major' => 'required|string',
            ]);
            $this->with_member_2 = true;
        }
        if ($this->member_3_email || $this->member_3_name || $this->member_3_twibbon || $this->member_3_whatsapp || $this->member_3_year || $this->member_3_major) {
            $arr_validation = array_merge($arr_validation, [
                'member_3_name' => 'required',
                'member_3_email' => 'required|email|unique:team_senior_members,email|unique:team_junior_members,email',
                'member_3_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
                'member_3_twibbon' => 'required|url',
                'member_3_year' => 'required|integer|min:2000',
                'member_3_major' => 'required|string',
            ]);
            $this->with_member_3 = true;
        }
        $this->validate($arr_validation);
        if (($this->with_member_2 && $this->member_1_email == $this->member_2_email) ||
            ($this->with_member_3 && $this->member_1_email == $this->member_3_email) ||
            ($this->with_member_2 && $this->with_member_3 && $this->member_2_email == $this->member_3_email)
        ) {
            $this->errorMessage = "Email masing-masing peserta tidak boleh sama";
            return;
        }

        if (!$this->agree) {
            $this->errorMessage = 'Tolong setujui syarat dan ketentuan';
            return;
        }

        $this->isAkunDone = true;
//            masukin ke database di sini bikin create
        \Auth::user()->update([
            'name' => $this->member_1_name,
            'no_hp' => $this->member_1_whatsapp]);
        $team_member_1 = TeamSeniorMember::create([
            'name' => $this->member_1_name,
            'email' => $this->member_1_email,
            'whatsapp' => $this->member_1_whatsapp,
            'year' => $this->member_1_year,
            'major' => $this->member_1_major,
            'link_twibbon' => $this->member_1_twibbon
        ]);
        $team_member_2 = null;
        if ($this->with_member_2) {
            $team_member_2 = TeamSeniorMember::create([
                'name' => $this->member_2_name,
                'email' => $this->member_2_email,
                'whatsapp' => $this->member_2_whatsapp,
                'year' => $this->member_2_year,
                'major' => $this->member_2_major,
                'link_twibbon' => $this->member_2_twibbon
            ])->id;
        }
        $team_member_3 = null;
        if ($this->with_member_3) {
            if ($this->with_member_2) {
                $team_member_3 = TeamSeniorMember::create([
                    'name' => $this->member_3_name,
                    'email' => $this->member_3_email,
                    'year' => $this->member_3_year,
                    'major' => $this->member_3_major,
                    'whatsapp' => $this->member_3_whatsapp,
                    'link_twibbon' => $this->member_3_twibbon
                ])->id;
            } else {
                $team_member_2 = TeamSeniorMember::create([
                    'name' => $this->member_3_name,
                    'email' => $this->member_3_email,
                    'whatsapp' => $this->member_3_whatsapp,
                    'year' => $this->member_3_year,
                    'major' => $this->member_3_major,
                    'link_twibbon' => $this->member_3_twibbon
                ])->id;
            }
        }
        $team_data = TeamSeniorData::create([
            'team_name' => $this->team_name,
            'info_source' => $this->info_source,
            'university_name' => $this->university_name,
            'city_id' => $this->university_city,
            'competition_round' => 'Penyisihan',
            'leader_id' => $team_member_1->id,
            'member1_id' => $team_member_2,
            'member2_id' => $team_member_3
        ]);
        \Auth::user()->userable->update([
            'bionix_id' => $team_data->id,
            'bionix_type' => 'App\Models\Bionix\TeamSeniorData'
        ]);

        return redirect()->to(route('bionix.peserta.homepage'));
    }

    public function mount()
    {
        $this->cities = City::orderBy('region')->get();
        $this->university_city = $this->cities[0]->id;
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
        return view('livewire.pages.auth.register-college')->layout('layouts.guest');;
    }
}
