<?php

namespace App\Http\Livewire\Pages\Landing\Icon\VirtualJobFair;

use App\Models\IconJobfairLowongan;
use App\Models\IconJobfairLowonganMemberApply;
use App\Models\IconJobfairLowonganMemberBookmark;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Periode extends Component
{
    use WithFileUploads;

    public $filters;
    public $cv_path;
    public $portfolio;
    public $personal_letter;
    public $filterBookmark;
    public
        $lowongans,
        $lowongan_detail,
        $isModalShown,
        $isBookmarked,
        $step,
        $cv_file,
        $portfolio_file,
        $personal_letter_file,
        $openAtLoad = false,
        $agreement,
        $is_applied;
    public $need_to_be_completed;

    public function updatedFilters()
    {
        $this->getLowongan();
    }

    public function updatedFilterBookmark()
    {
        $this->getLowongan();
    }

    public function getLowongan()
    {
        if ($this->filterBookmark) {
            if (\Auth::check() && \Auth::user()->userType == 'member' && \Auth::user()->hasVerifiedEmail()) {
                $bookmark_id = IconJobfairLowonganMemberBookmark::where('member_id', \Auth::user()->userable_id)->select('lowongan_id')->get()->toArray();
                $this->lowongans = IconJobfairLowongan::whereIn('type', $this->filters)->whereIn('id', $bookmark_id)->get();
                return;
            }
        }
        $this->lowongans = IconJobfairLowongan::whereIn('type', $this->filters)->get();
    }

    public function mount($lowongan_id = null)
    {
        $this->step = 1;
        $this->lowongans = IconJobfairLowongan::all();
        $this->filters = [
            0 => "Full-Time",
            1 => "Part-Time",
            2 => "Internship"
        ];
        if ($lowongan_id) {
            $this->getDetail($lowongan_id);
            $this->openAtLoad = true;
        }
        $this->checkProfile();
    }

    public function submit()
    {
        $this->validate([
            'agreement' => 'required'
        ]);
        $this->validateFile();
        $cv_path = null;
        $portfolio_path = null;
        $personal_letter_path = null;

        if ($this->cv_file && !is_string($this->cv_file)) {
            $namecv = date('YmdHis') . '_CV_' . \Auth::user()->name . '.' . $this->cv_file->getClientOriginalExtension();
            $this->cv_file->storeAs('cv_jobfair', $namecv, 'public');
            $cv_path = 'cv_jobfair/' . $namecv;
        } else {
            $cv_path = \Auth::user()->userable->jobfair->cv_path;
        }
        if ($this->lowongan_detail->need_portfolio == 1) {
            if ($this->portfolio_file && !is_string($this->portfolio_file)) {

                $nameportfolio = date('YmdHis') . '_Portfolio_' . \Auth::user()->name . '.' . $this->portfolio_file->getClientOriginalExtension();
                $this->portfolio_file->storeAs('portfolio_jobfair', $nameportfolio, 'public');
                $portfolio_path = 'portfolio_jobfair/' . $nameportfolio;
            } else {
                $portfolio_path = \Auth::user()->userable->jobfair->portfolio;
            }
        }

        if ($this->personal_letter_file && !is_string($this->personal_letter_file) && $this->lowongan_detail->need_personal_letter == 1) {
            $nameletter = date('YmdHis') . '_Personal Letter.' . \Auth::user()->name . '.' . $this->personal_letter_file->getClientOriginalExtension();
            $this->personal_letter_file->storeAs('personal_letter_jobfair', $nameletter, 'public');
            $personal_letter_path = 'personal_letter_jobfair/' . $nameletter;
        }
        IconJobfairLowonganMemberApply::create([
            'member_id' => \Auth::user()->userable_id,
            'lowongan_id' => $this->lowongan_detail->id,
            'cv_path' => $cv_path,
            'portfolio' => $portfolio_path,
            'personal_letter' => $personal_letter_path,
        ]);
        $this->reset(['personal_letter_file', 'cv_file', 'portfolio_file']);
        $this->step = 4;
    }

    public function getDetail($id_lowongan)
    {
        $lowongan = IconJobfairLowongan::findOrFail($id_lowongan);
        $this->lowongan_detail = $lowongan;

        if (\Auth::check() && \Auth::user()->userType == 'member' && \Auth::user()->hasVerifiedEmail()) {
            $this->isBookmarked = IconJobfairLowonganMemberBookmark::where('lowongan_id', $lowongan->id)->where('member_id', \Auth::user()->userable_id)->count() >= 1;
            $this->is_applied = $lowongan->applys->where('member_id', \Auth::user()->userable_id)->count() > 0;
        } else {
            $this->isBookmarked = false;
            $this->is_applied = false;
        }
    }

    public function detail($id_lowongan)
    {
        $this->getDetail($id_lowongan);
        $this->isModalShown = true;
    }

    public function markAsBookmark()
    {
        if (\Auth::check() && \Auth::user()->userType == 'member' && \Auth::user()->hasVerifiedEmail()) {
            $check_bookmark = IconJobfairLowonganMemberBookmark::where('lowongan_id', $this->lowongan_detail->id)->where('member_id', \Auth::user()->userable_id);
            if ($check_bookmark->count() > 0) {
                $check_bookmark->delete();
                $this->isBookmarked = false;
            } else {
                IconJobfairLowonganMemberBookmark::create([
                    'lowongan_id' => $this->lowongan_detail->id,
                    'member_id' => \Auth::user()->userable_id
                ]);
                $this->isBookmarked = true;
            }
        } else {
            $this->redirect(route('login'));
        }
    }

    public function validateFile()
    {
        $is_error = false;
        $this->resetValidation();
        $arr_validate = [];
        if ($this->cv_file && !is_string($this->cv_file)) {
            $arr_validate = array_merge($arr_validate, [
                'cv_file' => 'required|mimes:pdf',
            ]);
        } else {
            if (!\Auth::user()->userable->jobfair->cv_path) {
                $this->getErrorBag()->add('cv_file', 'Please upload your CV');
            }
        }
        if ($this->lowongan_detail->need_portfolio == 1) {
            if ($this->portfolio_file && !is_string($this->portfolio_file)) {
                $arr_validate = array_merge($arr_validate, [
                    'portfolio_file' => 'required|mimes:pdf',
                ]);
            } else {
                if (!\Auth::user()->userable->jobfair->portfolio) {
                    $this->getErrorBag()->add('portfolio', 'Please upload your Portfolio');
                }
            }
        }
        if ($this->lowongan_detail->need_personal_letter == 1) {
            $arr_validate = array_merge($arr_validate, [
                'personal_letter_file' => 'required|mimes:pdf',
            ]);
        }
        if (sizeof($this->getErrorBag()->messages()) > 0) {
            $is_error = true;
        }
        if (sizeof($arr_validate) > 0) {
            $this->validate($arr_validate);
        }
        return !$is_error;
    }

    public function addStep($value)
    {
        if (!$this->isModalShown) {
            $this->isModalShown = true;
        }
        if ($value > 0) {
            if ($this->step == 2) {
                if (!$this->validateFile()) {
                    return;
                }
            } elseif ($this->step == 3) {
                $this->submit();
                return;
            }
        }
        $this->step += $value;
    }

    public function closeModal()
    {
        $this->isModalShown = false;
        $this->lowongan_detail = null;
        $this->step = 1;
        $this->is_applied = false;
        $this->emit('closeModal');
    }

    public function checkProfile()
    {
        if (\Auth::check()) {
            if (\Auth::user()->userable->jobfair) {
                if (\Auth::user()->userable->jobfair->tempat_lahir && \Auth::user()->userable->jobfair->tanggal_lahir &&
                    \Auth::user()->userable->jobfair->alamat_domisili && \Auth::user()->userable->jobfair->alamat_ktp &&
                    \Auth::user()->userable->jobfair->pendidikan_terakhir && \Auth::user()->userable->jobfair->pendidikan_saat_ini &&
                    \Auth::user()->userable->jobfair->instansi_pendidikan_saat_ini && \Auth::user()->userable->jobfair->jurusan &&
                    \Auth::user()->userable->jobfair->social_media) {
                    return $this->need_to_be_completed = false;
                }
            }
        }
        return $this->need_to_be_completed = true;
    }

    public function render()
    {
        return view('livewire.pages.landing.icon.virtual-job-fair.dalam-periode')->layout("layouts.landing");
    }
}
