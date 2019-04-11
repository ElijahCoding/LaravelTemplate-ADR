<?php

namespace App\Http\Controllers\Tech\Operation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tech\Type\TechOperationType;
use App\Models\Tech\Operation\TechOperation;
use App\Http\Requests\Tech\TechOperationStoreRequest;
use App\Http\Resources\Tech\Type\TechOperationTypeResource;
use App\Http\Resources\Tech\Operation\TechOperationResource;

class TechOperationController extends Controller
{
    public function index()
    {
        return TechOperationTypeResource::collection(TechOperationType::with('tech_operations')->get());
    }

    public function store(TechOperationStoreRequest $request)
    {
        $operation = TechOperation::create($request->all());

        return new TechOperationResource($operation);
    }

    public function show(TechOperation $operation)
    {
        $operation->load('tech_operation_type');

        return new TechOperationResource($operation);
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
