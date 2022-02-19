<?php

namespace App\Http\Livewire\Pages\Auth;

use App\Models\Bionix\City;
use Livewire\Component;

class Register extends Component
{
    public $email, $password, $password_confirmation, $name, $phone_number, $jenjang, $is_step_2;

    public function mount()
    {
        $this->is_step_2 = false;
    }

    public function goToStepTwo()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|string'
        ]);
        if ($this->password != $this->password_confirmation) {
            session()->flash('error', 'Password dan konfirmasi harus sama');
            return;
        }
        $this->is_step_2 = true;
    }

    public function backToStepOne()
    {
        $this->is_step_2 = false;
    }

    public function closeModal()
    {
        session()->remove('error');
        $this->resetErrorBag();
    }

    public function render()
    {
        return view('livewire.pages.auth.register')->layout('layouts.guest');
    }
}
