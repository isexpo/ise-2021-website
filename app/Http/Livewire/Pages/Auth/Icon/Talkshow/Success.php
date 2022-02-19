<?php

namespace App\Http\Livewire\Pages\Auth\Icon\Talkshow;

use Livewire\Component;

class Success extends Component
{
    public function render()
    {
        return view('livewire.pages.auth.icon.talkshow.success')->layout('layouts.guest');
    }
}
