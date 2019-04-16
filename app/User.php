<?php

namespace App;

use App\Models\Region;
use App\Models\Profile;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Permissions\{Permission, Role};
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable, SoftDeletes;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'user_permission');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }

    public function regions()
    {
        return $this->belongsToMany(Region::class, 'user_region');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function getJWTIdentifier()
    {
        return $this->id;
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
