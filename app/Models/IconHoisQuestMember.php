<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconHoisQuestMember extends Model
{
    use HasFactory;

    protected $fillable=['member_id','quiz_id','is_right','answer'];

    public function quiz(){
        return $this->belongsTo(IconHoisQuestQuiz::class,'quiz_id');
    }

    public function member(){
        return $this->belongsTo(Member::class);
    }
}
