<?php

namespace App\Http\Livewire\Pages\Bionix\Peserta\College\Penyisihan;

use App\Models\Bionix\Submission;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class Modal extends ModalComponent
{
    use WithFileUploads;
    public $filePenyisihan, $submission, $deadline, $want_to_pay = 1;

    public function mount($submission)
    {
        $this->deadline = date('Y-m-d H:i:s', strtotime('2021-09-16 23:59:59'));
        if($submission){
            $this->submission = Submission::find($submission);
        }
    }

    public function submit()
    {
        $this->validate([
            'filePenyisihan' => 'required|max:10240|mimes:pdf,zip,rar'
        ]);

        if ($this->deadline < Carbon::now()) {
            return;
        }
        $name = $this->submission ? $this->submission->file_path : null;
        if (!is_string($this->filePenyisihan)) {
            $name = (date('YmdHis') . '_Penyisihan BIONIX College_' . \Auth::user()->userable->bionix->team_name . '.' . $this->filePenyisihan->getClientOriginalExtension());
            $this->filePenyisihan->storeAs('penyisihan_bionix_college', $name, 'public');
            $name = 'penyisihan_bionix_college/' . $name;
        }

        if ($this->submission) {
            if ($this->submission->file_path)
                \Storage::disk('public')->delete($this->submission->file_path);
            $this->submission->update([
                'file_path' => $name ? $name : null,
                'submit_time' => Carbon::now()
            ]);
        } else {
            $submission = Submission::create([
                'team_id' => \Auth::user()->userable->bionix_id,
                'team_type' => 'App\Models\Bionix\TeamSeniorData',
                'file_path' => $name ? $name : null,
                'submission_type' => 'Senior Penyisihan'
            ]);
            $this->submission = $submission;
        }
        \Auth::user()->userable->bionix->update([
            'want_to_pay'=>$this->want_to_pay
        ]);
        $this->emit('showSuccess',$this->submission);
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.bionix.peserta.college.penyisihan.modal');
    }
}
