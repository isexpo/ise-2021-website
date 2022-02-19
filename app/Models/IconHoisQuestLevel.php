<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconHoisQuestLevel extends Model
{
    use HasFactory;

    protected $fillable = ['name','open_time'];

    public function quizzes(){
        return $this->hasMany(IconHoisQuestQuiz::class,'quest_level_id','id');
    }
}
