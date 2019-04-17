<?php

namespace App\Models\Permissions;

use App\Models\User;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Module extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public function domains()
    {
        return $this->belongsToMany(Domain::class, 'domain_module');
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}
