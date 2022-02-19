<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['jenjang', 'academy_id', 'academy_type', 'bionix_id', 'bionix_type', 'hois_point'];

    public function bionix()
    {
        return $this->morphTo();
    }

    public function academy()
    {
        return $this->morphTo();
    }

    public function userData()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function quizAnswers()
    {
        return $this->hasMany(IconHoisQuestMember::class);
    }

    public function articles()
    {
        return $this->hasMany(IconHoisShareMember::class);
    }

    public function talkshow()
    {
        return $this->hasOne(IconTalkshowMember::class);
    }

    public function jobfair()
    {
        return $this->hasOne(JobfairMember::class);
    }

    public function getBionixTypeAttribute()
    {
        if ($this->attributes['bionix_type'] == 'App\Models\Bionix\TeamJuniorData') {
            return 'bionix_junior';
        } elseif ($this->attributes['bionix_type'] == 'App\Models\Bionix\TeamSeniorData') {
            return 'bionix_senior';
        }
    }

    public function getAcademyTypeAttribute()
    {
        if ($this->attributes['academy_type'] == 'App\Models\Icon\IconAcademyDataScience') {
            return 'Data Science Academy';
        } elseif ($this->attributes['academy_type'] == 'App\Models\Icon\IconAcademyStartup') {
            return 'Startup Academy';
        }
    }
}
