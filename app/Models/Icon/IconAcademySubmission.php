<?php

namespace App\Models\Icon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconAcademySubmission extends Model
{
    use HasFactory;
    protected $fillable=['task_id','member_id','member_type','team_type','file_path','evaluation_file_path','evaluation_comment','submit_time'];

    public function submission(){
        return $this->morphTo();
    }

    public function task(){
        return $this->belongsTo(IconAcademyTask::class,'task_id','id');
    }
}
