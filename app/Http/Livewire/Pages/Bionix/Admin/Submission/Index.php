<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Submission;

use Livewire\Component;

class Index extends Component
{
    public $type;
    public $title;

    public function mount($type = null)
    {
        if ($type == 'penyisihan-college') {
            $this->type = 'Senior Penyisihan';
            $this->title = 'Penyisihan BIONIX College Level';
        } elseif ($type == 'semifinal-college') {
            $this->type = 'Senior Semifinal';
            $this->title = 'Semifinal BIONIX College Level';
        } elseif ($type == 'semifinal-student') {
            $this->type = 'Junior Semifinal';
            $this->title = 'Semifinal BIONIX Student Level';
        } else {
            return abort(404);
        }
    }

    public function render()
    {
        return view('livewire.pages.bionix.admin.submission.index');
    }
}
