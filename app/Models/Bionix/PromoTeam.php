<?php

namespace App\Models\Bionix;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoTeam extends Model
{
    use HasFactory;

    protected $fillable=['promo_id','team_id','team_type'];

    public function promo(){
        return $this->belongsTo(PromoCode::class,'promo_id','id');
    }

    public function team(){
        return $this->morphTo();
    }
}
