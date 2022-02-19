<?php

namespace App\Http\Livewire\Pages\Icon\Jobfair\Admin\Lowongan\Modal;

use App\Models\IconJobfairLowongan;
use App\Models\IconJobfairPerusahaan;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddEdit extends ModalComponent
{
    public $name,
        $typeJob,
        $desc,
        $requirement,
        $need_personal_letter,
        $need_portfolio,
        $perusahaan,
        $perusahaans,
        $lowongan,
        $is_edit = false;

    public function mount($type, $id = null)
    {
        $this->perusahaans = IconJobfairPerusahaan::all();
        if ($type == 'edit') {

            $this->is_edit = true;
            $this->lowongan = IconJobfairLowongan::find($id);
            $this->name = $this->lowongan->name;
            $this->typeJob = $this->lowongan->type;
            $this->desc = $this->lowongan->desc;
            $this->requirement = $this->lowongan->requirement;
            $this->need_personal_letter = $this->lowongan->need_personal_letter;
            $this->perusahaan = $this->lowongan->perusahaan_id;
            $this->need_portfolio = $this->lowongan->need_portfolio;
        }
    }


    public function submit()
    {
        $arr_vall = [
            'name' => 'required',
            'desc' => 'required',
            'typeJob' => 'required',
            'perusahaan' => 'required',
            'requirement' => 'required',
        ];

        $this->validate($arr_vall);

        if (!$this->is_edit) {
            IconJobfairLowongan::create([
                'name' => $this->name,
                'desc' => $this->desc,
                'type' => $this->typeJob,
                'requirement' => $this->requirement,
                'need_personal_letter' => $this->need_personal_letter ? 1 : 0,
                'need_portfolio' => $this->need_portfolio ? 1 : 0,
                'perusahaan_id' => $this->perusahaan
            ]);
        } else {
            $this->lowongan->update([
                'name' => $this->name,
                'desc' => $this->desc,
                'type' => $this->typeJob,
                'requirement' => $this->requirement,
                'need_personal_letter' => $this->need_personal_letter ? 1 : 0,
                'need_portfolio' => $this->need_portfolio ? 1 : 0,
                'perusahaan_id' => $this->perusahaan
            ]);
        }


        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }


    public function render()
    {
        return view('livewire.pages.icon.jobfair.admin.lowongan.modal.add-edit');
    }
}
