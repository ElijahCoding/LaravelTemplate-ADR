<?php

namespace App\Models\Permissions;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['name'];

    public function domains()
    {
        return $this->belongsToMany(Domain::class, 'domain_module');
    }

    
}
