<?php

namespace App\Http\Controllers\Tech\Operation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tech\Type\TechOperationType;
use App\Models\Tech\Operation\TechOperation;

class TechOperationController extends Controller
{
    public function index()
    {
        
        // return TechOperationType::with('operations')->get();
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
