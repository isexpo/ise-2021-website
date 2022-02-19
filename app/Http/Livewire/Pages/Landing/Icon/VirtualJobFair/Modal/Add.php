<?php

namespace App\Http\Livewire\Pages\Landing\Icon\VirtualJobFair\Modal;

use App\Models\IconJobfairLowonganMemberApply;
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
        $cv_path,
        $portfolio,
        $personal_letter,
        $is_cv_change,
        $is_portfolio_change,
        $is_leter_change;

    public function submit()
    {
        if (!is_string($this->cv_path)) {
            $arr_vall = array_merge($arr_vall, [
                'cv_path' => 'required|pdf|max:3000',
            ]);
        }
        if (!is_string($this->portfolio)) {
            $arr_vall = array_merge($arr_vall, [
                'portfolio' => 'required|pdf|max:3000',
            ]);
        }
        if (!is_string($this->personal_letter)) {
            $arr_vall = array_merge($arr_vall, [
                'personal_letter' => 'required|pdf|max:3000',
            ]);
        }
        $this->validate($arr_vall);

        Storage::disk('public')->makeDirectory('lowongan/cv_apply');

        //Uploud CV
        $nameCv = "";
        if ($this->is_cv_change) {
            $name = date('YmdHis') . '_VIRTUALJOBFAIR_' . $this->name . '.' . $this->cv_path->getClientOriginalExtension();
            $resized_file = (new ImageManager())
                ->make($this->cv_path)
                ->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode($this->cv_path->getClientOriginalExtension());
            Storage::disk('public')
                ->put(
                    'lowongan/cv_apply/' . $name,
                    $resized_file->__toString()
                );
            $nameCv = 'lowongan/cv_apply/' . $name;
        }

        Storage::disk('public')->makeDirectory('lowongan/portfolio_apply');

        //Uploud Portfolio
        $namePortfolio = "";
        if ($this->is_portfolio_change) {
            $name = date('YmdHis') . '_VIRTUALJOBFAIR_' . $this->name . '.' . $this->portfolio->getClientOriginalExtension();
            $resized_file = (new ImageManager())
                ->make($this->portfolio)
                ->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode($this->portfolio->getClientOriginalExtension());
            Storage::disk('public')
                ->put(
                    'lowongan/portfolio_apply/' . $name,
                    $resized_file->__toString()
                );
            $namePortfolio = 'lowongan/portfolio_apply/' . $name;
        }

        Storage::disk('public')->makeDirectory('lowongan/personal_letter');

        //Uploud Personal Letter
        $nameLatter = "";
        if ($this->is_letter_change) {
            $name = date('YmdHis') . '_VIRTUALJOBFAIR_' . $this->name . '.' . $this->personal_letter->getClientOriginalExtension();
            $resized_file = (new ImageManager())
                ->make($this->personal_letter)
                ->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode($this->personal_letter->getClientOriginalExtension());
            Storage::disk('public')
                ->put(
                    'lowongan/personal_letter/' . $name,
                    $resized_file->__toString()
                );
            $nameLatter = 'lowongan/personal_letter/' . $name;
        }
        IconJobfairLowonganMemberApply::create([
            'member_id' => \Auth::user()->userable_id,
            'lowongan_id' => $this->content->id,
            'cv_path' => $this->$nameCv,
            'portfolio' => $namePortfolio,
            'personal_letter' => $nameLatter
        ]);
        $this->emit('refreshLivewireDatatable');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.pages.landing.icon.virtual-job-fair.dalam-periode')->layout('layouts.landing');
    }
}
