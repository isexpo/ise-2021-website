<?php

namespace App\Http\Livewire\Pages\Auth;

use Livewire\Component;

class EmailVerification extends Component
{
    public function render()
    {
        return view('livewire.pages.auth.email-verification')->layout('layouts.guest');
    }
}
