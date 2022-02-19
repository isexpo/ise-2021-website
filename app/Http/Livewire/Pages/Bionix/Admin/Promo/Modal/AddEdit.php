<?php

namespace App\Http\Livewire\Pages\Bionix\Admin\Promo\Modal;

use App\Models\Bionix\PromoCode;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;

class AddEdit extends ModalComponent
{
    public $promo;
    public $type = 'add';
    public $nama_promo = '';
    public $kode_promo = '';
    public $nominal = 0;
    public $tanggal_mulai = '';
    public $tanggal_selesai = '';

    public function mount($type, $id = null)
    {
        $this->type = $type;
        if ($type == 'edit') {
            $this->promo = PromoCode::find($id);
            $this->nama_promo = $this->promo->name;
            $this->kode_promo = $this->promo->promo_code;
            $this->nominal = $this->promo->nominal;
            $this->tanggal_mulai = date('d F Y', strtotime($this->promo->start));
            $this->tanggal_selesai = date('d F Y', strtotime($this->promo->end));
        }
    }

    public function submit()
    {
        $this->validate([
            'nama_promo' => 'required',
            'kode_promo' => ['required', 'max:10', 'string'],
            'nominal' => 'required|min:0|integer',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after:tanggal_mulai',
        ]);

        if ($this->type == 'add') {
            $this->validate([
                'kode_promo' => Rule::unique(PromoCode::class, 'promo_code')
            ]);
            PromoCode::create([
                'name' => $this->nama_promo,
                'promo_code' => $this->kode_promo,
                'nominal' => $this->nominal,
                'start' => date('Y-m-d', strtotime($this->tanggal_mulai)),
                'end' => date('Y-m-d', strtotime($this->tanggal_selesai))
            ]);
        } elseif ($this->type == 'edit') {
            $this->promo->update([
                'name' => $this->nama_promo,
                'promo_code' => $this->kode_promo,
                'nominal' => $this->nominal,
                'start' => date('Y-m-d', strtotime($this->tanggal_mulai)),
                'end' => date('Y-m-d', strtotime($this->tanggal_selesai))
            ]);
        }

        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.bionix.admin.promo.modal.add-edit');
    }
}
