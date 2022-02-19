<?php

namespace App\Http\Livewire\Pages\Icon\Academy\Admin\Pengumuman\Modal;

// use Livewire\Component;
use App\Models\Icon\Announcement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;

class AddEdit extends ModalComponent
{
    //TODO (Putri) Pengumuman
    //Modifikasi dari CRUD pengumuman BIONIX
    //URL : /dashboard/admin/academy/pengumuman
    public $pengumuman;
    public $type = 'add';
    public $nama_pengumuman = '';
    public $isi_pengumuman = '';
    public $tipe_pengumuman = 'normal';
    public $kategori_pengumuman = 'startup';
    public $tanggal_mulai = '';
    public $tanggal_selesai = '';

    public function mount($type, $id = null)
    {
        $this->type = $type;
        if ($type == 'edit') {
            $this->pengumuman = Announcement::find($id);
            $this->nama_pengumuman = $this->pengumuman->title;
            $this->isi_pengumuman = $this->pengumuman->content;
            $this->tipe_pengumuman = $this->pengumuman->type;
            $this->kategori_pengumuman = $this->pengumuman->category;
            $this->tanggal_mulai = date('d F Y', strtotime($this->pengumuman->start));
            $this->tanggal_selesai = date('d F Y', strtotime($this->pengumuman->end));
        }
    }

    public function submit()
    {
        $this->validate([
            'nama_pengumuman' => 'required',
            'isi_pengumuman' => ['required', 'string'],
            'tipe_pengumuman' => 'required',
            'kategori_pengumuman' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after:tanggal_mulai',
        ]);

        if ($this->type == 'add') {
            Announcement::create([
                'title' => $this->nama_pengumuman,
                'content' => $this->isi_pengumuman,
                'type' => $this->tipe_pengumuman,
                'category' => $this->kategori_pengumuman,
                'start' => date('Y-m-d', strtotime($this->tanggal_mulai)),
                'end' => date('Y-m-d', strtotime($this->tanggal_selesai))
            ]);
        } elseif ($this->type == 'edit') {
            $this->pengumuman->update([
                'title' => $this->nama_pengumuman,
                'content' => $this->isi_pengumuman,
                'type' => $this->tipe_pengumuman,
                'category' => $this->kategori_pengumuman,
                'start' => date('Y-m-d', strtotime($this->tanggal_mulai)),
                'end' => date('Y-m-d', strtotime($this->tanggal_selesai))
            ]);
        }

        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.icon.academy.admin.pengumuman.modal.add-edit');
    }
}
