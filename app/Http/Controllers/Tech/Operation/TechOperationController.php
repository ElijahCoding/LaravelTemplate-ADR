<?php

namespace App\Http\Controllers\Tech\Operation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tech\Type\TechOperationType;
use App\Models\Tech\Operation\TechOperation;
use App\Http\Resources\Tech\Type\TechOperationTypeResource;

class TechOperationController extends Controller
{
    public function index()
    {
        return TechOperationTypeResource::collection(TechOperationType::with('tech_operations')->get());
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
