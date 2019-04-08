<?php

namespace App\Http\Controllers\Tech\Type;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tech\Type\TechOperationType;
use App\Http\Resources\Tech\Type\TechOperationTypeResource;

class TechOperationTypeController extends Controller
{
    public function index()
    {
        return TechOperationTypeResource::collection(TechOperationType::get());
    }
}
