<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconHoisQuestQuiz extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'question', 'img_path', 'opt_a', 'opt_b', 'opt_c', 'opt_d', 'answer', 'explanation', 'quest_level_id'];

    public function level()
    {
        return $this->belongsTo(IconHoisQuestLevel::class, 'quest_level_id', 'id');
    }

    public function memberAnswers()
    {
        return $this->hasMany(IconHoisQuestMember::class, 'quiz_id', 'id');
    }

}
