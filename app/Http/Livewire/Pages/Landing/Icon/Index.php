<?php

namespace App\Http\Livewire\Pages\Landing\Icon;

use App\Models\Icon\IconFeedback;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Livewire\Component;

class Index extends Component
{
    use WithRateLimiting;
    public $feedback;
    public $message;
    public $messageColor;

    public function addFeedback()
    {

        if($this->feedback==null||trim($this->feedback)==''){
            $this->message = 'Tolong jangan lupa isikan pesan kamu ya';
            $this->messageColor = '#e74c3c';
            return;
        }
        if(strlen($this->feedback)>300){
            $this->message = 'Masukan jangan sampai lebih dari 300 karakter ya';
            $this->messageColor = '#e74c3c';
            return;
        }
        try{
            $this->rateLimit(1,60);
            IconFeedback::create([
                'feedback' => $this->feedback
            ]);
            $this->message = 'Pesan kamu sudah kami terima. Terima kasih.';
            $this->messageColor = '#25d366';
            $this->reset('feedback');
        }catch (TooManyRequestsException $e){
            $this->message = 'Kamu terlalu cepat untuk memberikan masukan lagi. Mohon tunggu sebentar.';
            $this->messageColor = '#e74c3c';
        }

    }

    public function render()
    {
        return view('livewire.pages.landing.icon.index')->layout("layouts.landing");
    }
}
