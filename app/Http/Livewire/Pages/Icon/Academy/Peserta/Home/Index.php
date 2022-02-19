<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Peserta\Home;

use App\Models\Icon\Announcement;
use Carbon\Carbon;
use Livewire\Component;

class Index extends Component
{
//TODO (Atra) (Beranda Startup/Data Science)
//Cukup modifikasi dari beranda BIONIX aja
//
//URL : /dashboard/peserta/academy/

    public $announcement;

    public function mount()
    {

        $this->announcement = Announcement::where('start', '<=', Carbon::now())
            ->where('end', '>=', Carbon::now())
            ->where(function ($q) {
                $q->where('category', (\Auth::user()->userable->academy_type == 'Startup Academy' ? 'Startup' : 'Data Science'))
                    ->orWhere('category', 'All Academy');
            })
            ->get();
    }

    public function render()
    {
        return view('livewire.pages.icon.academy.peserta.home.index');
    }
}
