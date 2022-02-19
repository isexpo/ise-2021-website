<?php

namespace App\Http\Livewire\Pages\Auth\Icon\Academy;

use App\Models\Icon\IconAcademyDataScience;
use Livewire\Component;

class RegisterDataScience extends Component
{
    //    TODO (Atra) (Registrasi Data Science)
    //    Cukup modifikasi dari regis BIONIX aja
    public $step = 1;
    public $isIdentityDone = false;
    public $isAkunDone = false;
    public $errorMessage;
    public $agree;
    public $name, $gender, $institute_name, $major, $email, $reason_joining_academy, $post_academy_activity, $info_source;


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
            if ($this->isInfoDSDone) {
                $this->step = $toStep;
                $this->errorMessage = '';
            } else {
                $this->errorMessage = "Harap selesaikan tahap 2 terlebih dahulu";
            }
        }
    }

    public function identitySubmit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'institute_name' => 'required',
            'major' => 'required'
        ]);
        $this->isIdentityDone = true;
        $this->move(2);
    }

    public function akunSubmit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'institute_name' => 'required',
            'info_source' => 'required',
            'major' => 'required',
            'reason_joining_academy' => 'required',
            'post_academy_activity' => 'required'
        ]);
        if (!$this->agree) {
            $this->errorMessage = 'Tolong setujui syarat dan ketentuan';
            return;
        }

        \Auth::user()->update([
            'name' => $this->name
        ]);

        $userData = IconAcademyDataScience::create([
            'institute_name' => $this->institute_name,
            'info_source' => $this->info_source,
            'major' => $this->major,
            'reason_joining_academy' => $this->reason_joining_academy,
            'post_academy_activity' => $this->post_academy_activity,
            'gender' => $this->gender
        ]);
        \Auth::user()->userable->update([
            'academy_id' => $userData->id,
            'academy_type' => "App\Models\Icon\IconAcademyDataScience"
        ]);

        $this->isAkunDone = true;
        return redirect()->to(route('academy.academy.home'));
    }

    public function mount()
    {
        $this->info_source = 'Media Sosial ISE! 2021';
        $this->email = \Auth::user()->email;
        $this->name = \Auth::user()->name;
        $this->gender = 'Laki-Laki';
    }

    public function closeModal()
    {
        $this->errorMessage = '';
        $this->resetErrorBag();
    }


    public function render()
    {
        return view('livewire.pages.auth.icon.academy.register-data-science')->layout('layouts.guest');
    }
}
