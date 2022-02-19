<?php

namespace App\Models\Icon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconFeedback extends Model
{
    use HasFactory;

    protected $fillable = ['feedback'];
}
