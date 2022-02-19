<?php

namespace App\Http\Livewire\Pages\Icon\Jobfair\Peserta\RegistrasiUlang;

use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class Index extends Component
{
    use WithFileUploads;

    public $name,
        $email,
        $birth_place,
        $birth_date,
        $address,
        $identity_address,
        $last_education,
        $curr_education,
        $institute_name,
        $major,
        $semester,
        $social_media;
    public $cv_path;
    public $portfolio;
    public $is_edit = false;
    public $message, $messageType;

    public function mount()
    {
        $this->name = \Auth::user()->name;
        $this->cv_path = \Auth::user()->userable->jobfair->cv_path;
        $this->portfolio = \Auth::user()->userable->jobfair->portfolio;
        $this->email = \Auth::user()->email;
        $this->birth_place = \Auth::user()->userable->jobfair->tempat_lahir;
        $this->birth_date = date('d F Y', strtotime(\Auth::user()->userable->jobfair->tanggal_lahir));
        $this->address = \Auth::user()->userable->jobfair->alamat_domisili;
        $this->identity_address = \Auth::user()->userable->jobfair->alamat_ktp;
        $this->last_education = \Auth::user()->userable->jobfair->pendidikan_terakhir;
        $this->curr_education = \Auth::user()->userable->jobfair->pendidikan_saat_ini;
        $this->institute_name = \Auth::user()->userable->jobfair->instansi_pendidikan_saat_ini;
        $this->major = \Auth::user()->userable->jobfair->jurusan;
        $this->semester = \Auth::user()->userable->jobfair->semester;
        $this->social_media =\Auth::user()->userable->jobfair->social_media;
    }

    public function toEditMode()
    {
        $this->is_edit = true;
    }

    public function saveData()
    {
        if ($this->cv_path && !is_string($this->cv_path)) {
            $file_name = date('YmdHis') . '_CV_' . $this->name . '.' . $this->cv_path->getClientOriginalExtension();
            $this->cv_path->storeAs('cv_jobfair', $file_name, 'public');
            \Auth::user()->userable->jobfair->update([
                'cv_path' => 'cv_jobfair/' . $file_name
            ]);
            $this->cv_path = 'cv_jobfair/' . $file_name;
        }

        if ($this->portfolio && !is_string($this->portfolio)) {
            $file_name = date('YmdHis') . '_Portfolio_' . $this->name . '.' . $this->portfolio->getClientOriginalExtension();
            $this->portfolio->storeAs('portfolio_jobfair', $file_name, 'public');
            \Auth::user()->userable->jobfair->update([
                'portfolio' => 'portfolio_jobfair/' . $file_name
            ]);
            $this->portfolio = 'portfolio_jobfair/' . $file_name;
        }
        \Auth::user()->userable->jobfair->update([
            'tempat_lahir' => $this->birth_place,
            'tanggal_lahir' => date('Y-m-d', strtotime($this->birth_date)),
            'alamat_domisili' => $this->address,
            'alamat_ktp' => $this->identity_address,
            'pendidikan_terakhir' => $this->last_education,
            'pendidikan_saat_ini' => $this->curr_education,
            'instansi_pendidikan_saat_ini' => $this->institute_name,
            'jurusan' => $this->major,
            'semester' => $this->semester == 0 || !$this->semester ? null : $this->semester,
            'social_media' => $this->social_media
        ]);
        $this->is_edit = false;
        $this->message = 'Data identitas berhasil diubah';
        $this->messageType = 'green';
    }

    public function render()
    {
        return view('livewire.pages.icon.jobfair.peserta.registrasi-ulang.index');
    }


}

