<?php

namespace App\Http\Livewire\Pages\Bionix\Peserta;

use App\Models\Bionix\City;
use App\Models\Bionix\TeamJuniorMember;
use App\Models\Bionix\TeamSeniorMember;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class IdentitasTim extends Component
{
    use WithFileUploads;

    public $is_edit = false;
    public $message, $messageType;
    public $cities;
    public $photo1;
    public $photo2;
    public $photo3;
    public
        $team_name,
        $info_source,
        $member_1_name,
        $member_2_name,
        $member_3_name,
        $member_1_email,
        $member_2_email,
        $member_3_email,
        $member_1_whatsapp,
        $member_2_whatsapp,
        $member_3_whatsapp,
        $member_1_twibbon,
        $member_2_twibbon,
        $member_3_twibbon,
        $member_1_major,
        $member_2_major,
        $member_3_major,
        $member_1_year,
        $member_2_year,
        $member_3_year,
        $school_name,
        $school_city;
    public $with_member_2, $with_member_3;
    public $new_member_2 = false, $new_member_3 = false;

    protected $listeners = ['deleteMember'];

    public function mount()
    {
        if ((\Auth::user()->userable->bionix_type == "bionix_junior" && \Auth::user()->userable->bionix->member_id) || (\Auth::user()->userable->bionix_type == "bionix_senior" && \Auth::user()->userable->bionix->member1_id)) {
            $this->with_member_2 = true;
        } else {
            $this->with_member_2 = false;
        }
        if (\Auth::user()->userable->bionix_type == "bionix_senior" && \Auth::user()->userable->bionix->member2_id) {
            $this->with_member_3 = true;
        } else {
            $this->with_member_3 = false;
        }

        $this->cities = City::orderBy('region')->get();
        $this->info_source = \Auth::user()->userable->bionix->info_source;
        $this->team_name = \Auth::user()->userable->bionix->team_name;
        $this->member_1_name = \Auth::user()->name;
        $this->member_2_name = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? (\Auth::user()->userable->bionix->member ? \Auth::user()->userable->bionix->member->name : null) : (\Auth::user()->userable->bionix->member_1 ? \Auth::user()->userable->bionix->member_1->name : null));
        $this->member_3_name = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? null : (\Auth::user()->userable->bionix->member_2 ? \Auth::user()->userable->bionix->member_2->name : null));
        $this->member_1_email = \Auth::user()->email;
        $this->member_2_email = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? (\Auth::user()->userable->bionix->member ? \Auth::user()->userable->bionix->member->email : null) : (\Auth::user()->userable->bionix->member_1 ? \Auth::user()->userable->bionix->member_1->email : null));
        $this->member_3_email = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? null : (\Auth::user()->userable->bionix->member_2 ? \Auth::user()->userable->bionix->member_2->email : null));
        $this->member_1_whatsapp = \Auth::user()->no_hp;
        $this->member_2_whatsapp = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? (\Auth::user()->userable->bionix->member ? \Auth::user()->userable->bionix->member->whatsapp : null) : (\Auth::user()->userable->bionix->member_1 ? \Auth::user()->userable->bionix->member_1->whatsapp : null));
        $this->member_3_whatsapp = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? null : (\Auth::user()->userable->bionix->member_2 ? \Auth::user()->userable->bionix->member_2->whatsapp : null));
        $this->school_name = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? \Auth::user()->userable->bionix->school_name : \Auth::user()->userable->bionix->university_name);
        $this->school_city = \Auth::user()->userable->bionix->city_id;
        $this->photo1 = \Auth::user()->userable->bionix->leader->identity_card_path;
        $this->photo2 = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? (\Auth::user()->userable->bionix->member ? \Auth::user()->userable->bionix->member->identity_card_path : null) : (\Auth::user()->userable->bionix->member_1 ? \Auth::user()->userable->bionix->member_1->identity_card_path : null));
        $this->photo3 = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? null : (\Auth::user()->userable->bionix->member_2 ? \Auth::user()->userable->bionix->member_2->identity_card_path : null));
        $this->member_1_twibbon = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? null : \Auth::user()->userable->bionix->leader->link_twibbon);
        $this->member_2_twibbon = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? null : (\Auth::user()->userable->bionix->member_1 ? \Auth::user()->userable->bionix->member_1->link_twibbon : null));
        $this->member_3_twibbon = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? null : (\Auth::user()->userable->bionix->member_2 ? \Auth::user()->userable->bionix->member_2->link_twibbon : null));
        $this->member_1_major = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? null : \Auth::user()->userable->bionix->leader->major);
        $this->member_2_major = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? null : (\Auth::user()->userable->bionix->member_1 ? \Auth::user()->userable->bionix->member_1->major : null));
        $this->member_3_major = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? null : (\Auth::user()->userable->bionix->member_2 ? \Auth::user()->userable->bionix->member_2->major : null));
        $this->member_1_year = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? null : \Auth::user()->userable->bionix->leader->year);
        $this->member_2_year = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? null : (\Auth::user()->userable->bionix->member_1 ? \Auth::user()->userable->bionix->member_1->year : null));
        $this->member_3_year = (\Auth::user()->userable->bionix_type == 'bionix_junior' ? null : (\Auth::user()->userable->bionix->member_2 ? \Auth::user()->userable->bionix->member_2->year : null));
    }

    public function toEditMode()
    {
        $this->is_edit = true;
    }

    public function saveData()
    {
        $arr_validate = [
            'team_name' => 'required',
            'member_1_name' => 'required',
            'member_1_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
            'school_name' => 'required',
            'school_city' => 'required',
            'info_source' => 'required'
        ];
        if (!is_string($this->photo1)) {
            $arr_validate = array_merge($arr_validate, [
                'photo1' => 'required|image|max:1024', // 1MB Max
            ]);
        }

        if ($this->with_member_2) {
            $arr_validate = array_merge($arr_validate,
                [
                    'member_2_name' => 'required',
                    'member_2_email' => ['required', 'email', Rule::unique('team_senior_members', 'email')->ignore((\Auth::user()->userable->bionix_type == "bionix_junior" ? '' : \Auth::user()->userable->bionix->member1_id)), Rule::unique('team_junior_members', 'email')->ignore((\Auth::user()->userable->bionix_type == "bionix_junior" ? \Auth::user()->userable->bionix->member_id : ''))],
                    'member_2_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string'
                ]);
            if (\Auth::user()->userable->bionix_type == "bionix_senior") {
                $arr_validate = array_merge($arr_validate, [
                    'member_2_twibbon' => 'required|url',
                    'member_2_major' => 'required|string',
                    'member_2_year' => 'required|integer|min:2000|max:' . date('Y'),
                ]);
            }
            if ($this->photo2 && !is_string($this->photo2)) {
                $arr_validate = array_merge($arr_validate, [
                    'photo2' => 'required|image|max:1024', // 1MB Max
                ]);
            }
        } else {
            if (($this->member_2_email || $this->member_2_name || $this->member_2_whatsapp || ($this->photo2 && !is_string($this->photo2))) ||
                (\Auth::user()->userable->bionix_type == "bionix_senior" && ($this->member_2_twibbon || $this->member_2_year || $this->member_2_major))) {
                $this->new_member_2 = true;
                $arr_validate = array_merge($arr_validate,
                    [
                        'member_2_name' => 'required',
                        'member_2_email' => ['required', 'email', Rule::unique('team_senior_members', 'email')->ignore((\Auth::user()->userable->bionix_type == "bionix_junior" ? '' : \Auth::user()->userable->bionix->member1_id)), Rule::unique('team_junior_members', 'email')->ignore((\Auth::user()->userable->bionix_type == "bionix_junior" ? \Auth::user()->userable->bionix->member_id : ''))],
                        'member_2_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
                        'photo2' => 'required|image|max:1024',
                    ]);
                if (\Auth::user()->userable->bionix_type == "bionix_senior") {
                    $arr_validate = array_merge($arr_validate, [
                        'member_2_twibbon' => 'required|url',
                        'member_2_major' => 'required|string',
                        'member_2_year' => 'required|integer|min:2000|max:' . date('Y'),
                    ]);
                }
            }
        }

        if (\Auth::user()->userable->bionix_type == "bionix_senior") {
            $arr_validate = array_merge($arr_validate, [
                'member_1_twibbon' => 'required|url',
                'member_1_major' => 'required|string',
                'member_1_year' => 'required|integer|min:2000|max:' . date('Y'),
            ]);
            if ($this->with_member_3) {
                $arr_validate = array_merge($arr_validate, [
                    'member_3_twibbon' => 'required|url',
                    'member_3_major' => 'required|string',
                    'member_3_year' => 'required|integer|min:2000|max:' . date('Y'),
                    'member_3_name' => 'required',
                    'member_3_email' => ['required', 'email', Rule::unique('team_senior_members', 'email')->ignore(\Auth::user()->userable->bionix->member2_id), Rule::unique('team_junior_members', 'email')],
                    'member_3_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
                ]);
                if ($this->photo3 && !is_string($this->photo3)) {
                    $arr_validate = array_merge($arr_validate, [
                        'photo3' => 'required|image|max:1024', // 1MB Max
                    ]);
                }
            } elseif (($this->member_3_email || $this->member_3_name || $this->member_3_whatsapp || $this->member_3_major || $this->member_3_year || ($this->photo3 && !is_string($this->photo3))) ||
                (\Auth::user()->userable->bionix_type == "bionix_senior" && $this->member_3_twibbon)) {
                $this->new_member_3 = true;
                $arr_validate = array_merge($arr_validate, [
                    'member_3_twibbon' => 'required|url',
                    'member_3_major' => 'required|string',
                    'member_3_year' => 'required|integer|min:2000|max:' . date('Y'),
                    'member_3_name' => 'required',
                    'member_3_email' => ['required', 'email', Rule::unique('team_senior_members', 'email')->ignore(\Auth::user()->userable->bionix->member2_id), Rule::unique('team_junior_members', 'email')],
                    'member_3_whatsapp' => 'required|regex:/^(^08)\d{8,11}$/|max:13|string',
                    'photo3' => 'required|image|max:1024', // 1MB Max
                ]);
            }

        }

        $this->validate($arr_validate);

        Storage::disk('public')->makeDirectory('kartu_identitas');

        //Update DB
        if (\Auth::user()->userable->bionix_type == "bionix_junior") {
            \Auth::user()->userable->bionix->update([
                'team_name' => $this->team_name,
                'school_name' => $this->school_name,
                'city_id' => $this->school_city,
                'info_source' => $this->info_source
            ]);
            if ($this->with_member_2) {
                \Auth::user()->userable->bionix->member->update([
                    'name' => $this->member_2_name,
                    'email' => $this->member_2_email,
                    'whatsapp' => $this->member_2_whatsapp
                ]);
            } elseif ($this->new_member_2) {
                $member_2 = TeamJuniorMember::create([
                    'name' => $this->member_2_name,
                    'email' => $this->member_2_email,
                    'whatsapp' => $this->member_2_whatsapp
                ]);
                \Auth::user()->userable->bionix->update([
                    'member_id' => $member_2->id
                ]);
            }
            if (!is_string($this->photo1)) {
                $name = date('YmdHis') . '_BIONIX Student_' . $this->team_name . '_1' . '.' . $this->photo1->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->photo1)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->photo1->getClientOriginalExtension());
                Storage::disk('public')
                    ->put('kartu_identitas/' . $name,
                        $resized_image->__toString());
                \Auth::user()->userable->bionix->leader->update([
                    'identity_card_path' => 'kartu_identitas/' . $name
                ]);
            }

            if ($this->photo2 && !is_string($this->photo2)) {
                $name = date('YmdHis') . '_BIONIX Student_' . $this->team_name . '_2' . '.' . $this->photo2->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->photo2)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->photo2->getClientOriginalExtension());
                Storage::disk('public')
                    ->put('kartu_identitas/' . $name,
                        $resized_image->__toString());

                \Auth::user()->userable->bionix->member->update([
                    'identity_card_path' => 'kartu_identitas/' . $name
                ]);
            }
        } elseif (\Auth::user()->userable->bionix_type == "bionix_senior") {
            \Auth::user()->userable->bionix->update([
                'team_name' => $this->team_name,
                'university_name' => $this->school_name,
                'city_id' => $this->school_city,
                'info_source' => $this->info_source
            ]);
            \Auth::user()->userable->bionix->leader->update([
                'link_twibbon' => $this->member_1_twibbon
            ]);
            if ($this->with_member_2) {
                \Auth::user()->userable->bionix->member_1->update([
                    'link_twibbon' => $this->member_2_twibbon,
                    'year' => $this->member_2_year,
                    'major' => $this->member_2_major,
                    'name' => $this->member_2_name,
                    'email' => $this->member_2_email,
                    'whatsapp' => $this->member_2_whatsapp
                ]);
            } elseif ($this->new_member_2) {
                $member_2 = TeamSeniorMember::create([
                    'link_twibbon' => $this->member_2_twibbon,
                    'year' => $this->member_2_year,
                    'major' => $this->member_2_major,
                    'name' => $this->member_2_name,
                    'email' => $this->member_2_email,
                    'whatsapp' => $this->member_2_whatsapp
                ]);

                \Auth::user()->userable->bionix->update([
                    'member1_id' => $member_2->id
                ]);
            }

            if ($this->with_member_3) {
                \Auth::user()->userable->bionix->member_2->update([
                    'link_twibbon' => $this->member_3_twibbon,
                    'year' => $this->member_3_year,
                    'major' => $this->member_3_major,
                    'name' => $this->member_3_name,
                    'email' => $this->member_3_email,
                    'whatsapp' => $this->member_3_whatsapp
                ]);
            } elseif ($this->new_member_3) {
                $member_3 = TeamSeniorMember::create([
                    'link_twibbon' => $this->member_3_twibbon,
                    'year' => $this->member_3_year,
                    'major' => $this->member_3_major,
                    'name' => $this->member_3_name,
                    'email' => $this->member_3_email,
                    'whatsapp' => $this->member_3_whatsapp
                ]);
                if (!$this->with_member_2 && !$this->new_member_2) {
                    $this->member_2_twibbon = $this->member_3_twibbon;
                    $this->member_2_name = $this->member_3_name;
                    $this->member_2_email = $this->member_3_email;
                    $this->member_2_whatsapp = $this->member_3_whatsapp;
                    $this->photo2 = $this->photo3;

                    $this->member_3_twibbon = null;
                    $this->member_3_name = null;
                    $this->member_3_email = null;
                    $this->member_3_whatsapp = null;
                    $this->photo3 = null;

                    \Auth::user()->userable->bionix->update([
                        'member1_id' => $member_3->id
                    ]);
                } else {
                    \Auth::user()->userable->bionix->update([
                        'member2_id' => $member_3->id
                    ]);
                }


            }

            if (!is_string($this->photo1)) {
                $name = date('YmdHis') . '_BIONIX College_' . $this->team_name . '_1' . '.' . $this->photo1->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->photo1)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->photo1->getClientOriginalExtension());
                Storage::disk('public')
                    ->put('kartu_identitas/' . $name,
                        $resized_image->__toString());
                \Auth::user()->userable->bionix->leader->update([
                    'identity_card_path' => 'kartu_identitas/' . $name
                ]);
            }
            if ($this->photo2 && !is_string($this->photo2)) {
                $name = date('YmdHis') . '_BIONIX College_' . $this->team_name . '_2' . '.' . $this->photo2->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->photo2)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->photo2->getClientOriginalExtension());
                Storage::disk('public')
                    ->put('kartu_identitas/' . $name,
                        $resized_image->__toString());
                \Auth::user()->userable->bionix->member_1->update([
                    'identity_card_path' => 'kartu_identitas/' . $name
                ]);
            }
            if ($this->photo3 && !is_string($this->photo3)) {
                $name = date('YmdHis') . '_BIONIX College_' . $this->team_name . '_3' . '.' . $this->photo3->getClientOriginalExtension();
                $resized_image = (new ImageManager())
                    ->make($this->photo3)
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($this->photo3->getClientOriginalExtension());
                Storage::disk('public')
                    ->put('kartu_identitas/' . $name,
                        $resized_image->__toString());
                \Auth::user()->userable->bionix->member_2->update([
                    'identity_card_path' => 'kartu_identitas/' . $name
                ]);
            }
        }
        \Auth::user()->update([
            'name' => $this->member_1_name,
            'no_hp' => $this->member_1_whatsapp]);
        \Auth::user()->userable->bionix->leader->update([
            'name' => $this->member_1_name,
            'year' => $this->member_1_year,
            'major' => $this->member_1_major,
            'whatsapp' => $this->member_1_whatsapp
        ]);
        $this->is_edit = false;
        $this->message = 'Data diri berhasil diubah';
        $this->messageType = 'green';
    }

    public function batalSubmit()
    {
        \Auth::user()->userable->bionix->update([
            'profile_verif_status' => 'Belum Unggah'
        ]);
    }

    public function deleteMember($member_no)
    {
        if ($member_no == 2) {
            $this->member_2_whatsapp = null;
            $this->member_2_email = null;
            $this->member_2_twibbon = null;
            $this->member_2_name = null;
            $this->member_2_year = null;
            $this->member_2_major = null;
            $this->photo2 = null;
            $this->with_member_2 = false;
            $this->new_member_2 = false;

            if (\Auth::user()->userable->bionix_type == "bionix_junior" && \Auth::user()->userable->bionix->member_id) {
                \Auth::user()->userable->bionix->member->delete();
            } elseif (\Auth::user()->userable->bionix_type == "bionix_senior" && \Auth::user()->userable->bionix->member1_id) {
                \Auth::user()->userable->bionix->member_1->delete();
            }
        } elseif ($member_no == 3) {
            $this->member_3_whatsapp = null;
            $this->member_3_email = null;
            $this->member_3_twibbon = null;
            $this->member_3_name = null;
            $this->member_3_year = null;
            $this->member_3_major = null;
            $this->photo3 = null;
            $this->with_member_3 = false;
            $this->new_member_3 = false;

            if (\Auth::user()->userable->bionix_type == "bionix_senior" && \Auth::user()->userable->bionix->member2_id) {
                \Auth::user()->userable->bionix->member_2->delete();
            }
        }
        $this->message = 'Anggota ' . $member_no . ' berhasil dihapus';
        $this->messageType = 'green';
    }

    public function applyVerification()
    {
        if ($this->is_edit) {
            $this->message = 'Pastikan bahwa perubahan data diri telah tersimpan';
            $this->messageType = 'red';
            return;
        }
        if (\Auth::user()->userable->bionix_type == "bionix_junior") {
            if (!\Auth::user()->userable->bionix->team_name ||
                !\Auth::user()->userable->bionix->school_name ||
                !\Auth::user()->userable->bionix->leader->identity_card_path ||
                (\Auth::user()->userable->bionix->member_id &&
                    (!\Auth::user()->userable->bionix->member->name ||
                        !\Auth::user()->userable->bionix->member->email ||
                        !\Auth::user()->userable->bionix->member->identity_card_path ||
                        !\Auth::user()->userable->bionix->member->whatsapp))) {
                $this->message = 'Pastikan bahwa semua data telah terisi';
                $this->messageType = 'red';
                return;
            }
        } else {
            if (!\Auth::user()->userable->bionix->team_name ||
                !\Auth::user()->userable->bionix->university_name ||
                !\Auth::user()->userable->bionix->leader->identity_card_path ||
                !\Auth::user()->userable->bionix->leader->link_twibbon ||
                !\Auth::user()->userable->bionix->leader->year ||
                !\Auth::user()->userable->bionix->leader->major ||
                (\Auth::user()->userable->bionix->member1_id && (
                        !\Auth::user()->userable->bionix->member_1->identity_card_path ||
                        !\Auth::user()->userable->bionix->member_1->name ||
                        !\Auth::user()->userable->bionix->member_1->email ||
                        !\Auth::user()->userable->bionix->member_1->whatsapp ||
                        !\Auth::user()->userable->bionix->member_1->year ||
                        !\Auth::user()->userable->bionix->member_1->major ||
                        !\Auth::user()->userable->bionix->member_1->link_twibbon)) ||
                (\Auth::user()->userable->bionix->member2_id && (!\Auth::user()->userable->bionix->member_2->link_twibbon ||
                        !\Auth::user()->userable->bionix->member_2->identity_card_path ||
                        !\Auth::user()->userable->bionix->member_2->name ||
                        !\Auth::user()->userable->bionix->member_2->email ||
                        !\Auth::user()->userable->bionix->member_2->year ||
                        !\Auth::user()->userable->bionix->member_2->major ||
                        !\Auth::user()->userable->bionix->member_2->whatsapp))) {
                $this->message = 'Pastikan bahwa semua data telah terisi';
                $this->messageType = 'red';
                return;
            }
        }
        \Auth::user()->userable->bionix->update([
            'profile_verif_status' => 'Tahap Verifikasi'
        ]);
    }

    public function closeMessage()
    {
        $this->resetErrorBag();
        $this->message = null;
        $this->messageType = null;
    }

    public function render()
    {
        return view('livewire.pages.bionix.peserta.identitas-tim');
    }
}



