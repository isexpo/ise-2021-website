<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconJobfairPerusahaan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'company_url', 'logo_path', 'desc', 'is_desc_video', 'media_path'];

    public function lowongans()
    {
        return $this->hasMany(IconJobfairLowongan::class, 'peruahaan_id', 'id');
    }
}
