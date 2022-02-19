<?php

namespace App\Models\Icon;

use App\Models\Admin;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconAcademyDataScience extends Model
{
    use HasFactory;
    protected $fillable = [
        'institute_name',
        'major',
        'info_source',
        'reason_joining_academy',
        'post_academy_activity',
        'gender',
        'identity_card_path',
        'profile_verif_status',
        'profile_verif_comment',
        'profile_verified_by',
        'academy_status',
        'hackerrank_profile_link',
        'cv_path',
        'link_twibbon'
    ];


    public function memberData()
    {
        return $this->morphOne(Member::class, 'academy');
    }

    public function getIsProfileDataVerifiedAttribute()
    {
        return $this->profile_verif_status == 'Terverifikasi' && $this->profile_verified_by;
    }

    public function getIsPaymentVerifiedAttribute()
    {
        return $this->payment_verif_status == 'Terverifikasi' && $this->payment_verified_by;
    }

    public function teamDataVerifier()
    {
        return $this->belongsTo(Admin::class, 'profile_verified_by');
    }

    public function paymentVerifier()
    {
        return $this->belongsTo(Admin::class, 'payment_verified_by');
    }


    public function submission(){
        return $this->morphMany(IconAcademySubmission::class, 'member');
    }
}
