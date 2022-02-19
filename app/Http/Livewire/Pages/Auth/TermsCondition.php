<?php

namespace App\Http\Livewire\Pages\Auth;

use Livewire\Component;

class TermsCondition extends Component
{
    public function render()
    {
        return view('livewire.pages.auth.terms-condition')->layout('layouts.guest');
    }
}
