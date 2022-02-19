<?php

namespace App\Models\Bionix;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TeamSeniorMember
 * @package App\Models\Bionix
 */
class TeamSeniorMember extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'email', 'year', 'major', 'whatsapp', 'identity_card_path', 'link_twibbon'];
}
