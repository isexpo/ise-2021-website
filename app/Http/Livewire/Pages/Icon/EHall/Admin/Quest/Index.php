<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Quest;

use App\Models\IconHoisQuestLevel;
use Livewire\Component;

class Index extends Component
{
    public $level;

    public function mount($id)
    {
        $this->level = IconHoisQuestLevel::find($id);
    }

    public function render()
    {
        return view('livewire.pages.icon.e-hall.admin.quest.index');
    }
}
