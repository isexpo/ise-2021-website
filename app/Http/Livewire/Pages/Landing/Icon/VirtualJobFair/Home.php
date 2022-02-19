<?php

namespace App\Http\Livewire\Pages\Landing\Icon\VirtualJobFair;

use App\Models\IconJobfairLowongan;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.pages.landing.icon.virtual-job-fair.sebelum-periode',  [
            'lowongan' => IconJobfairLowongan::latest()->get(),
        ])->layout("layouts.landing");
    }
}
