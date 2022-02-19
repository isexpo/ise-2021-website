<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Share\Modal;

// use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use App\Models\IconHoisShareArticle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class AddEdit extends ModalComponent
{
    use WithFileUploads;

    public $share;
    public $type = 'add';
    public $img_path;
    public $caption = '';
    public $tanggal_mulai = '';
    public $tanggal_selesai = '';


    public function mount($type, $id = null)
    {
        $this->type = $type;
        if ($type == 'edit') {
            $this->share = IconHoisShareArticle::find($id);
            $this->img_path = $this->share->img_path;
            $this->caption = $this->share->caption;
            $this->tanggal_mulai = date('d F Y', strtotime($this->share->start));
            $this->tanggal_selesai = date('d F Y', strtotime($this->share->end));
        }
    }

    public function submit()
    {
        $arr_validate = [
            'caption' => ['required', 'string'],
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after:tanggal_mulai',
        ];

        if ($this->img_path && !is_string($this->img_path)) {
            $arr_validate = array_merge($arr_validate, [
                'img_path' => 'required|mimes:png,jpg,jpeg',
            ]);
        }
        $this->validate($arr_validate);
        $path = null;
        if ($this->img_path && !is_string($this->img_path)) {
            if ($this->share) {
                if ($this->share->img_path) {
                    Storage::disk('public')->delete($this->share->img_path);
                }
            }
            $name = date('YmdHis') . '_' . 'img' . '.' . $this->img_path->getClientOriginalExtension();
            $this->img_path->storeAs('img_share_icon', $name, 'public');
            $path = 'img_share_icon/' . $name;
        }

        if ($this->type == 'add') {
            IconHoisShareArticle::create([
                'img_path' => $path,
                'caption' => $this->caption,
                'start' => date('Y-m-d', strtotime($this->tanggal_mulai)),
                'end' => date('Y-m-d', strtotime($this->tanggal_selesai))
            ]);
        } elseif ($this->type == 'edit') {
            if ($path) {
                $this->share->update(['img_path' => $path]);
            }
            $this->share->update([
                'caption' => $this->caption,
                'start' => date('Y-m-d', strtotime($this->tanggal_mulai)),
                'end' => date('Y-m-d', strtotime($this->tanggal_selesai))
            ]);
        }

        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.e-hall.admin.share.modal.add-edit');
    }
}
