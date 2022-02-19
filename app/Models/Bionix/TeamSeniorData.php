<?php

namespace App\Models\Bionix;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamSeniorData extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_name',
        'info_source',
        'university_name',
        'city_id',
        'competition_round',
        'profile_verif_status',
        'profile_verified_by',
        'profile_verif_comment',
        'want_to_pay',
        'payment_batch_2',
        'payment_price',
        'payment_proof_path',
        'payment_verif_status',
        'payment_verified_by',
        'payment_verif_comment',
        'invoice_no',
        'leader_id',
        'member1_id',
        'member2_id'
    ];

    public function leader()
    {
        return $this->hasOne(TeamSeniorMember::class, 'id', 'leader_id');
    }

    public function member_1()
    {
        return $this->hasOne(TeamSeniorMember::class, 'id', 'member1_id');
    }

    public function member_2()
    {
        return $this->hasOne(TeamSeniorMember::class, 'id', 'member2_id');
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

    public function submission()
    {
        return $this->morphMany(Submission::class, 'teamData');
    }

    public function teamDataVerifier()
    {
        return $this->belongsTo(Admin::class, 'profile_verified_by');
    }

    public function paymentVerifier()
    {
        return $this->belongsTo(Admin::class, 'payment_verified_by');
    }

    public function promo()
    {
        return $this->morphMany(PromoTeam::class, 'team');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function invoice()
    {
        return $this->belongsTo(BionixInvoice::class, 'invoice_no', 'invoice_no');
    }

    public function getPaymentAttribute()
    {
        return $this->payment_price + ($this->unique_code ? $this->unique_code : 0);
    }

}
