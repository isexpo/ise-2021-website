<?php

namespace App\Http\Livewire\Pages\Landing;

use Livewire\Component;

class ComingSoon extends Component
{
    public function render()
    {
        return view('livewire.pages.landing.coming-soon')->layout('layouts.landing');
    }
}
