<?php

namespace App\Models\Icon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconAcademyTask extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'deadline', 'task_type', 'question_file_path'];

    public function submission()
    {
        return $this->hasMany(IconAcademySubmission::class, 'task_id', 'id');
    }
}
