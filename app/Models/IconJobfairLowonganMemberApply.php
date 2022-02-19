<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconJobfairLowonganMemberApply extends Model
{
    use HasFactory;

    protected $fillable = ['lowongan_id', 'member_id', 'cv_path', 'portfolio', 'personal_letter'];

    public function lowongan()
    {
        return $this->belongsTo(IconJobfairLowongan::class, 'lowongan_id', 'id');
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
