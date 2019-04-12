<?php

namespace App\Models\Tech\Operation\Params;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tech\Operation\Type\TechOperationType;

class TechOperationParam extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function tech_operation_type()
    {
        return $this->belongsTo(TechOperationType::class);
    }
}
