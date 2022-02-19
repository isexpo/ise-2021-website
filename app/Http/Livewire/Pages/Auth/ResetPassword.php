<?php

namespace App\Http\Livewire\Pages\Auth;

use Livewire\Component;

class ResetPassword extends Component
{
    public function render()
    {
        return view('livewire.pages.auth.reset-password')->layout('layouts.ise-auth');
    }
}
