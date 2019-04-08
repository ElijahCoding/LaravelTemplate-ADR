<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'phone', 'position', 'last_login'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}