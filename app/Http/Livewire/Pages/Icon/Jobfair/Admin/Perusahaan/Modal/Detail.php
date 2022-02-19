<?php

namespace App\Http\Livewire\Pages\Icon\Jobfair\Admin\Perusahaan\Modal;

use App\Models\IconJobfairPerusahaan;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Detail extends ModalComponent
{
    public $nama,
    $company_url,
    $desc,
    $media_path,
    $is_desc_video;

    public function mount($id){
        $perusahaan = IconJobfairPerusahaan::find($id);
        $this->nama = $perusahaan->name;
        $this->company_url = $perusahaan->company_url;
        $this->desc = $perusahaan->desc;
        $this->is_desc_video = $perusahaan->is_desc_video;
        $this->media_path = $perusahaan->media_path;
    }


    public function render()
    {
        return view('livewire.pages.icon.jobfair.admin.perusahaan.modal.detail');
    }
}
