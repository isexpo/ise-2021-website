<?php

namespace App\Http\Livewire\Pages\Landing;

use Livewire\Component;

class IseLanding extends Component
{
    public function render()
    {
        return view('livewire.pages.landing.ise-landing')->layout('layouts.landing');
    }
}
