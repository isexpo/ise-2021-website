<?php

namespace App\Http\Livewire\Pages\Landing\Bionix;

use Livewire\Component;

class Main extends Component
{
    public $page;
    public $type;
    public function mount($type=null){
        $this->type=$type;
        if($type=='student'){
            $this->page = 'pages.landing.bionix.student';
        }
        elseif($type=='college'){
            $this->page = 'pages.landing.bionix.college';
        }else{
            $this->page = 'pages.landing.bionix.index';
        }
    }
    public function render()
    {
        return view('livewire.pages.landing.bionix.main')->layout('layouts.landing');
    }
}
