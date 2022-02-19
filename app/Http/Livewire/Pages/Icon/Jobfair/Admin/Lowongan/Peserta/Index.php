<?php

namespace App\Http\Livewire\Pages\Icon\Jobfair\Admin\Lowongan\Peserta;

use App\Models\IconJobfairLowongan;
use Livewire\Component;

class Index extends Component
{
    public $name,
    $requirement,
    $lowongan_id,
    $lowongan;

    public function mount($id){

        $this->lowongan_id = $id;
        $this->lowongan = IconJobfairLowongan::find($id);
        $this->name = $this->lowongan->name;
        $this->requirement = $this->lowongan->requirement;
    }


    public function render()
    {
        return view('livewire.pages.icon.jobfair.admin.lowongan.peserta.index');
    }
}
