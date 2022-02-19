<?php

namespace App\Models\Bionix;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    use HasFactory;

    protected $fillable=['name','promo_code','nominal','start','end'];

    public function usedPromo(){
        return $this->morphMany(PromoTeam::class,'promo_id');
    }
}
