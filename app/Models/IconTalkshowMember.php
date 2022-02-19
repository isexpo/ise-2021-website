<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconTalkshowMember extends Model
{
    use HasFactory;

    protected $fillable = ['member_id', 'institute_name', 'link_story','info_source','is_sent'];

    public function member(){
        return $this->belongsTo(Member::class,'member_id');
    }
}
