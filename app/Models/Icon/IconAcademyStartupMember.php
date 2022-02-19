<?php

namespace App\Models\Icon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconAcademyStartupMember extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email','whatsapp', 'identity_card_path','link_twibbon'];
}
