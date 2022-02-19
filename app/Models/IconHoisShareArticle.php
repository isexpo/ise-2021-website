<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconHoisShareArticle extends Model
{
    use HasFactory;

    protected $fillable = ['img_path', 'caption', 'start', 'end'];

    public function memberArticles()
    {
        return $this->hasMany(IconHoisShareMember::class, 'article_id');
    }
}
