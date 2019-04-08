<?php

namespace App\Models\Tech\Operation;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tech\Operation\TechOperationType;

class TechOperation extends Model
{
    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(TechOperationType::class);
    }
}