<?php

namespace App\Models\Tech\Operation;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tech\Type\TechOperationType;

class TechOperation extends Model
{
    protected $guarded = [];

    public function tech_operation_type()
    {
        return $this->belongsTo(TechOperationType::class);
    }
}
