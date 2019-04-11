<?php

namespace App\Models\Tech\Operation\Params;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tech\Operation\Params\TechOperationParam;

class TechOperationParamType extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function tech_operation_params()
    {
        return $this->hasMany(TechOperationParam::class);
    }
}
