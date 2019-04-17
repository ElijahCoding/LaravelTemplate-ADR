<?php

namespace App\Models\Permissions;

use App\Models\User;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Permission extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_permission');
    }
}
