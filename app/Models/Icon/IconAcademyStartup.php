<?php

namespace App\Models\Icon;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconAcademyStartup extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_name',
        'institute_name',
        'info_source',
        'startup_idea',
        'reason_joining_academy',
        'expectation_joining_academy',
        'post_academy_activity',
        'profile_verif_status',
        'profile_verified_by',
        'profile_verif_comment',
        'academy_status',
        'leader_id',
        'member1_id',
        'member2_id'
    ];

    public function leader()
    {
        return $this->hasOne(IconAcademyStartupMember::class, 'id', 'leader_id');
    }

    public function member_1()
    {
        return $this->hasOne(IconAcademyStartupMember::class, 'id', 'member1_id');
    }

    public function member_2()
    {
        return $this->hasOne(IconAcademyStartupMember::class, 'id', 'member2_id');
    }

    public function getIsTeamDataVerifiedAttribute()
    {
        return $this->profile_verif_status == 'Terverifikasi' && $this->profile_verified_by;
    }

    public function getIsPaymentVerifiedAttribute()
    {
        return $this->payment_verif_status == 'Terverifikasi' && $this->payment_verified_by;
    }

    public function isPaymentVerified()
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
