<?php

namespace App\Models\Permissions;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $fillable = ['name'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_domain');
    }

    // public function modules()
    // {
    //     return $this->belongsToMany(Module::class, 'domain_module');
    // }
}
