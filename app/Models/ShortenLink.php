<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortenLink extends Model
{
    use HasFactory;
    protected $fillable=['shorten_link','destination','description'];
}
