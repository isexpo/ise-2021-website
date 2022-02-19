<?php

namespace App\Http\Livewire\Pages\Landing\Icon\EHall;

use App\Models\Member;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class VirtualPlay extends Component
{
    public $leaderboard;
    public $current_rank = '?';

    public function mount()
    {
        $this->leaderboard = Member::orderBy('hois_point', 'Desc')->get();
        if (\Auth::check()) {
            if (\Auth::user()->user_type == "member") {
                $this->current_rank = $this->leaderboard->search(function ($member, $id) {
                    return $member->id == \Auth::user()->userable->id;
                });
                if ($this->current_rank||$this->current_rank==0) {
                    $this->current_rank += 1;
                } else {
                    $this->current_rank = '?';
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.pages.landing.icon.e-hall.virtual-play')->layout("layouts.landing");
    }
}
