<?php

namespace App\Http\Livewire\Pages\Auth\Icon\Academy;

use App\Models\Icon\IconAcademyStartup;
use App\Models\Icon\IconAcademyStartupMember;
use Auth;
use Livewire\Component;
use phpDocumentor\Reflection\PseudoTypes\False_;

class RegisterStartup extends Component
{

    //    TODO (Atra) (Registrasi Startup)
    //    Cukup modifikasi dari regis BIONIX aja
    public $step = 1;
    public $isIdentityDone = false;
    public $isAkunDone = false;
    public $isTimDone = false;
    public $isMember3;
    public $errorMessage;
    public $agree;
    public $team_name, $institute_name, $member_1_name, $member_1_email, $member_1_whatsapp, $member_2_name, $member_2_email, $member_2_whatsapp, $member_3_name, $member_3_email, $member_3_whatsapp, $startup_idea, $reason_joining_academy, $post_academy_activity,
        $info_source;


    public function mount()
    {
        $this->info_source = 'Media Sosial ISE! 2021';
        $this->member_1_name = \Auth::user()->name;
        $this->member_1_email = \Auth::user()->email;
        $this->member_1_whatsapp = \Auth::user()->no_hp;
        $this->isMember3 = 0;
        $this->startup_idea = '';
        $this->reason_joining_academy = '';
        $this->post_academy_activity = '';
    }

    public function move($toStep)
    {
        if ($toStep == 1) {
            $this->step = $toStep;
            $this->errorMessage = '';
        } elseif ($toStep == 2) {
            if ($this->isTimDone) {
                $this->step = $toStep;
                $this->errorMessage = '';
            } else {
                $this->errorMessage = "Harap selesaikan tahap 1 terlebih dahulu";
            }
        }
    }

    public function identityTeamSubmit()
    {
        $this->validate([
            'team_name' => 'required',
            'institute_name' => 'required',
            'info_source' => 'required',
        ]);
        $this->isTimDone = true;
        $this->move(2);
    }


    public function akunSubmit()
    {
        $this->validate([
            'team_name' => 'required',
            'institute_name' => 'required',
            'info_source' => 'required',
            'member_1_name' => 'required',
            'member_2_name' => 'required',
            'member_1_email' => 'required|email',
            'member_2_email' => 'required|email|unique:users,email|unique:icon_academy_startup_members,email',
            'member_1_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'member_2_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
        ]);
        if ($this->isMember3 == 1) {
            $this->validate([
                'member_3_name' => 'required',
                'member_3_email' => 'required|email|unique:users,email|unique:icon_academy_startup_members,email',
                'member_3_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',

            ]);
        }
        if (!$this->agree) {
            $this->errorMessage = 'Tolong setujui syarat dan ketentuan';
            return;
        }

        //masukin ke database di sini bikin create
        \Auth::user()->update([
            'name' => $this->member_1_name,
            'no_hp' => $this->member_1_whatsapp]);
        $team_member_1 = IconAcademyStartupMember::create([
            'name' => $this->member_1_name,
            'email' => $this->member_1_email,
            'whatsapp' => $this->member_1_whatsapp
        ]);
        $team_member_2 = IconAcademyStartupMember::create([
            'name' => $this->member_2_name,
            'email' => $this->member_2_email,
            'whatsapp' => $this->member_2_whatsapp
        ]);
        $team_data = IconAcademyStartup::create([
            'team_name' => $this->team_name,
            'institute_name' => $this->institute_name,
            'info_source' => $this->info_source,
            'reason_joining_academy' => $this->reason_joining_academy,
            'post_academy_activity' => $this->post_academy_activity,
            'startup_idea' => $this->startup_idea,
            'leader_id' => $team_member_1->id,
            'member1_id' => $team_member_2->id,
        ]);
        if ($this->isMember3 == 1) {
            $team_member_3 = IconAcademyStartupMember::create([
                'name' => $this->member_3_name,
                'email' => $this->member_3_email,
                'whatsapp' => $this->member_3_whatsapp
            ]);
            $team_data->update([
                'member2_id' => $team_member_3->id
            ]);
        }
        \Auth::user()->userable->update([
            'academy_id' => $team_data->id,
            'academy_type' => 'App\Models\Icon\IconAcademyStartup'
        ]);

        $this->isAkunDone = true;
        return redirect()->to(route('academy.academy.home'));

    }


    public function closeModal()
    {
        $this->errorMessage = '';
        $this->resetErrorBag();
    }

    public function render()
    {
        return view('livewire.pages.auth.icon.academy.register-startup')->layout('layouts.guest');
    }
}
