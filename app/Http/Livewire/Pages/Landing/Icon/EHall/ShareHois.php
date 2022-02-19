<?php

namespace App\Http\Livewire\Pages\Landing\Icon\EHall;

use App\Models\IconHoisShareArticle;
use App\Models\IconHoisShareMember;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class ShareHois extends Component
{
    use WithFileUploads;

    public $content;
    public $screenshot;
    public $platform;
    public $errorMessage;
    protected $rules = [
        'screenshot' => 'required|image|max:4096',
        'platform' => 'required|in:Line,Instagram,Whatsapp'
    ];
    public $message, $messageType;

    public function mount()
    {
        $this->content = IconHoisShareArticle::where('start', '<=', date('Y-m-d H:i:s'))
            ->where('end', '>=', date('Y-m-d H:i:s'))
            ->orderBy('end', 'ASC')
            ->first();
        $this->platform = 'Instagram';
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        $name = date('YmdHis') . 'Share' . \Auth::user()->name . '.' . $this->screenshot->getClientOriginalExtension();
        $resized_image = (new ImageManager())
            ->make($this->screenshot)
            ->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($this->screenshot->getClientOriginalExtension());
        Storage::disk('public')
            ->put(
                'share_ehois/' . $name,
                $resized_image->__toString()
            );
        IconHoisShareMember::create([
            'member_id' => \Auth::user()->userable_id,
            'article_id' => $this->content->id,
            'platform' => $this->platform,
            'ss_path' => 'share_ehois/' . $name
        ]);
        $this->message = 'Screenshot anda telah terkirim. Poin akan bertambah secara otomatis apabila screenshot valid.';
        $this->messageType = 'success';
        $this->screenshot = null;
    }

    public function closeModal()
    {
        $this->errorMessage = '';
        $this->message = '';
        $this->messageType = '';
        $this->resetErrorBag();
    }

    public function render()
    {
        return view('livewire.pages.landing.icon.e-hall.share-hois')->layout('layouts.landing');
    }
}
