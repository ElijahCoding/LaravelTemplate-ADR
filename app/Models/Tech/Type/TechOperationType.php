<?php

namespace App\Models\Tech\Type;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tech\Operation\TechOperation;

class TechOperationType extends Model
{
    public function operations()
    {
        return $this->hasMany(TechOperation::class, 'id', 'type_id');
    }
}
