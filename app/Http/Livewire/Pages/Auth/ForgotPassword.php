<?php

namespace App\Http\Livewire\Pages\Auth;

use Livewire\Component;

class ForgotPassword extends Component
{
    public function render()
    {
        return view('livewire.pages.auth.forgot-password')->layout('layouts.ise-auth');
    }
}
