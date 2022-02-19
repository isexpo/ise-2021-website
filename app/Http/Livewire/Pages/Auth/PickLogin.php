<?php

namespace App\Http\Livewire\Pages\Auth;

use Livewire\Component;

class PickLogin extends Component
{
    public function mount(){
        if(\Auth::user()->userable->bionix_id||\Auth::user()->userable->icon_id){
            return $this->redirect(route('bionix.peserta.homepage'));
        }
    }
    public function render()
    {
        return view('livewire.pages.auth.pick-login')->layout('layouts.ise-auth');
    }
}
