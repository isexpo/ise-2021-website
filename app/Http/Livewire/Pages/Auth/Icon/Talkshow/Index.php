<?php

namespace App\Http\Livewire\Pages\Auth\Icon\Talkshow;

use App\Mail\TalkshowMail;
use App\Models\IconTalkshowMember;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $errorMessage;
    public $agree;
    public $name, $institute_name, $email, $whatsapp, $link_story, $info_source;


    public function akunSubmit()
    {
        if (\Auth::user()->userable->talkshow) {
            $this->errorMessage = 'Anda sudah mendaftar pada Grand Talkshow';
            return;
        }
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'institute_name' => 'required',
            'whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:14|string',
            'link_story' => 'required|url',
            'info_source' => 'required'
        ]);
        if (!$this->agree) {
            $this->errorMessage = 'Tolong setujui syarat dan ketentuan';
            return;
        }

        \Auth::user()->update([
            'name' => $this->name,
            'no_hp' => $this->whatsapp
        ]);

        IconTalkshowMember::create([
            'member_id' => \Auth::user()->userable_id,
            'institute_name' => $this->institute_name,
            'link_story' => $this->link_story,
            'info_source' => $this->info_source
        ]);
        Mail::to(\Auth::user()->email)->send(new TalkshowMail);
        return redirect()->to(route('register-success-talkshow'));
    }

    public function mount()
    {
        $this->email = \Auth::user()->email;
        $this->name = \Auth::user()->name;
        $this->whatsapp = \Auth::user()->no_hp;
        $this->info_source = 'Media Sosial ISE! 2021';
    }

    public function closeModal()
    {
        $this->errorMessage = '';
        $this->resetErrorBag();
    }

    public function render()
    {
        return view('livewire.pages.auth.icon.talkshow.index')->layout('layouts.guest');
    }
}
