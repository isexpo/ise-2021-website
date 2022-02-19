<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Quest\Level\Modal;

use App\Models\IconHoisQuestLevel;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddEdit extends ModalComponent
{
    public $level;
    public $name;
    public $open_date;
    public $type;

    public function mount($type, $id = null)
    {
        $this->type = $type;
        if ($type == 'edit') {
            $level = IconHoisQuestLevel::find($id);
            $this->level = $level;
            $this->name = $level->name;
            $this->open_date = date('Y-m-d', strtotime($level->open_time));
        }
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|string',
            'open_date' => 'required|date'
        ]);

        if ($this->type == 'add') {
            IconHoisQuestLevel::create([
                'name' => $this->name,
                'open_time' => date('Y-m-d',strtotime($this->open_date))
            ]);
        } elseif ($this->type == 'edit') {
            $this->level->update([
                'name' => $this->name,
                'open_time' => date('Y-m-d',strtotime($this->open_date))
            ]);
        }
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.e-hall.admin.quest.level.modal.add-edit');
    }
}
