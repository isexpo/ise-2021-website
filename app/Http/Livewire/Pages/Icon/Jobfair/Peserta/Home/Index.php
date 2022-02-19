<?php

namespace App\Http\Livewire\Pages\Icon\Jobfair\Peserta\Home;

use App\Models\IconJobfairLowongan;
use App\Models\IconJobfairLowonganMemberApply;
use App\Models\IconJobfairLowonganMemberBookmark;
use Livewire\Component;

class Index extends Component
{
    public $jobLists;
    public $isPageBookmark;

    public function mount() {
        $this->isPageBookmark = false;
        $this->jobLists = IconJobfairLowonganMemberApply::where('member_id',\ Auth::user()->userable->id )->get();
    }

    public function setToBookmark() {
        $this->isPageBookmark = true;
        $this->jobLists = IconJobfairLowonganMemberBookmark::where('member_id',\ Auth::user()->userable->id )->get();
    }

    public function setToApplied() {
        $this->isPageBookmark = false;
        $this->jobLists = IconJobfairLowonganMemberApply::where('member_id',\ Auth::user()->userable->id )->get();
    }


    public function render()
    {
        return view('livewire.pages.icon.jobfair.peserta.home.index');
    }
}
