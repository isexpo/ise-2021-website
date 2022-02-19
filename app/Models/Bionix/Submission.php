<?php

namespace App\Models\Bionix;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable=['team_id','team_type','file_path','video_link','submission_type'];

    public function teamData(){
        return $this->morphTo();
    }
}
