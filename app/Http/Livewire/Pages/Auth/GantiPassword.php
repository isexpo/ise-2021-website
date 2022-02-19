<?php

namespace App\Http\Livewire\Pages\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class GantiPassword extends Component
{
    public $old_password="";
    public $new_password="";
    public $retype_new_password="";

    public function changePassword(){
        $this->validate([
            'new_password'=>'required|string|min:8',
            'retype_new_password'=>'required|string|min:8',
        ]);
        if($this->new_password!=$this->retype_new_password){
            session()->flash('header','Konfirmasi password tidak cocok');
            session()->flash('message','Password baru dan konfirmasi tidak sama');
            session()->flash('message_color','red');
            return;
        }
        app('App\Actions\Fortify\UpdateUserPassword')->update(Auth::user(),['current_password'=>$this->old_password,'password'=>$this->new_password,'password_confirmation'=>$this->retype_new_password]);
        session()->flash('header','Ubah password berhasil');
        session()->flash('message','Password berhasil diubah');
        session()->flash('message_color','green');
    }

    public function render()
    {
        return view('livewire.pages.auth.ganti-password');
    }
}
