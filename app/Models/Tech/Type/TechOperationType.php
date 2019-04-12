<?php

namespace App\Models\Tech\Type;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tech\Operation\TechOperation;
use App\Models\Tech\Operation\Params\TechOperationParam;

class TechOperationType extends Model
{
    public function tech_operations()
    {
        return $this->hasMany(TechOperation::class);
    }

    public function tech_operation_params()
    {
        return $this->belongsToMany(TechOperationParam::class, 'tech_operation_param_type');
    }
}
