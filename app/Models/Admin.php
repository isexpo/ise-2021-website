<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable=['admin_type'];

    public function userData()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
