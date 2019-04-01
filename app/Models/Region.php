<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_region');
    }
}
