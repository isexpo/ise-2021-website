<?php

namespace App\Http\Livewire\Pages\Icon\Jobfair\Admin\Perusahaan\Modal;

use App\Models\IconJobfairPerusahaan;
use Intervention\Image\ImageManager;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Livewire\WithFileUploads;
use Storage;

class Add extends ModalComponent
{
    use WithFileUploads;

    public
        $name,
        $desc,
        $company_url,
        $logo_path,
        $is_desc_video,
        $media_path,
        $is_edit = false,
        $is_logo_change = false,
        $is_media_change = false,
        $perusahaan;

    public function updatedIsDescVideo()
    {
        $this->media_path = "";
    }

    public function updatedLogoPath()
    {
        $this->is_logo_change = true;
    }

    public function updatedMediaPath()
    {
        $this->is_media_change = true;
    }


    public function mount($type, $id = null)
    {
        if ($type == 'edit') {
            $this->is_edit = true;
            $this->perusahaan = IconJobfairPerusahaan::find($id);
            $this->name = $this->perusahaan->name;
            $this->company_url = $this->perusahaan->company_url;
            $this->desc = $this->perusahaan->desc;
            $this->is_desc_video = $this->perusahaan->is_desc_video;
            $this->media_path = $this->perusahaan->media_path;
            $this->logo_path = $this->perusahaan->logo_path;
        } else {
            $this->is_desc_video = 0;
        }
    }

    public function submit()
    {
        $arr_vall = [
            'name' => 'required',
            'desc' => ['required', 'string'],
            'company_url' => 'required',
        ];

        if (!is_string($this->logo_path)) {
            $arr_vall = array_merge($arr_vall, [
                'logo_path' => 'required|image|max:2048',
            ]);
        }

        if (!$this->is_desc_video && !is_string($this->media_path)) {
            $arr_vall = array_merge($arr_vall, [
                'media_path' => 'required|image|max:2048',
            ]);
        } else {
            $arr_vall = array_merge($arr_vall, [
                'media_path' => 'required',
            ]);
        }
        $this->validate($arr_vall);

        Storage::disk('public')->makeDirectory('jobfair/logo_perusahaan');

        //Upload Logo
        $nameLogo = "";
        if ($this->is_logo_change) {
            $name = date('YmdHis') . '_VIRTUALJOBFAIR_' . $this->name . '.' . $this->logo_path->getClientOriginalExtension();
            $resized_image = (new ImageManager())
                ->make($this->logo_path)
                ->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode($this->logo_path->getClientOriginalExtension());
            Storage::disk('public')
                ->put(
                    'jobfair/logo_perusahaan/' . $name,
                    $resized_image->__toString()
                );
            $nameLogo = 'jobfair/logo_perusahaan/' . $name;
        }

        Storage::disk('public')->makeDirectory('jobfair/media_perusahaan');
        //Update Media
        $nameMedia = "";
        if ($this->is_media_change) {
            if (!$this->is_desc_video && !is_string($this->media_path)) {
                $name = date('YmdHis') . '_VIRTUALJOBFAIR_' . $this->name . '.' . $this->media_path->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->media_path)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->media_path->getClientOriginalExtension());
                Storage::disk('public')
                    ->put(
                        'jobfair/media_perusahaan/' . $name,
                        $resized_image->__toString()
                    );
                $nameMedia = 'jobfair/media_perusahaan/' . $name;
            } elseif ($this->is_desc_video) {
                $nameMedia = $this->media_path;
            }
        }

        if ($this->is_edit) {

            $this->perusahaan->update([
                'name' => $this->name,
                'desc' => $this->desc,
                'company_url' => $this->company_url,
                'is_desc_video' => $this->is_desc_video
            ]);
            if ($this->is_logo_change) $this->perusahaan->update(['logo_path' => $nameLogo]);
            if ($this->is_media_change)  $this->perusahaan->update(['media_path' => $nameMedia]);
        } else {
            IconJobfairPerusahaan::create([
                'name' => $this->name,
                'desc' => $this->desc,
                'company_url' => $this->company_url,
                'is_desc_video' => $this->is_desc_video,
                'logo_path' => $nameLogo,
                'media_path' => $nameMedia
            ]);
        }

        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }


    public function render()
    {
        return view('livewire.pages.icon.jobfair.admin.perusahaan.modal.add');
    }
}
