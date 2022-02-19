<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconHoisShareMember extends Model
{
    use HasFactory;

    protected $fillable = ['member_id', 'article_id', 'platform','ss_path' ,'is_accepted'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function article()
    {
        return $this->belongsTo(IconHoisShareArticle::class, 'article_id');
    }
}
