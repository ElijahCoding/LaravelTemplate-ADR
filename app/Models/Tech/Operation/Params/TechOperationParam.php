<?php

namespace App\Models\Tech\Operation\Params;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tech\Operation\Params\TechOperationParamType;

class TechOperationParam extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function tech_operation_param_type()
    {
        return $this->belongsTo(TechOperationParamType::class);
    }
}
