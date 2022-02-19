<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconJobfairLowongan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'desc', 'requirement', 'need_personal_letter','need_portfolio' ,'perusahaan_id'];

    public function perusahaan()
    {
        return $this->belongsTo(IconJobfairPerusahaan::class, 'perusahaan_id', 'id');
    }

    public function bookmarks()
    {
        return $this->hasMany(IconJobfairLowonganMemberBookmark::class, 'lowongan_id', 'id');
    }

    public function applys()
    {
        return $this->hasMany(IconJobfairLowonganMemberApply::class, 'lowongan_id', 'id');
    }
}
