<?php

namespace App\Models\Tech\Operation\Params;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tech\Type\TechOperationType;

class TechOperationParam extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function tech_operation_types()
    {
        return $this->belongsToMany(TechOperationType::class, 'tech_operation_param_type');
    }
}
