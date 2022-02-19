<?php

namespace App\Http\Livewire\Pages\DashboardGlobal\Home;

use Livewire\Component;

class Countdown extends Component
{

    public $event_id;
    public $title;
    public $tag;
    public $deadline;
    public function mount($data){
        $this->event_id = $data['id'];
        $this->title = $data['title'];
        $this->tag = $data['tag'];
        $this->deadline = $data['deadline'];
    }

    public function render()
    {
        return view('livewire.pages.dashboard-global.home.countdown');
    }
}
