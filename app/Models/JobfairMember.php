<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobfairMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_id',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat_domisili',
        'alamat_ktp',
        'pendidikan_terakhir',
        'pendidikan_saat_ini',
        'instansi_pendidikan_saat_ini',
        'jurusan',
        'semester',
        'cv_path',
        'portfolio',
        'social_media'
    ];

    public function member()
    {
        return $this->hasOne(Member::class);
    }
}
