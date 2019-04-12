<?php

namespace Tests\Unit\Models\Tech\Type;

use Tests\TestCase;
use App\Models\Tech\Type\TechOperationType;
use App\Models\Tech\Operation\TechOperation;
use App\Models\Tech\Operation\Params\TechOperationParam;

class TechOperationTypeTest extends TestCase
{
    public function test_it_has_many_operations()
    {
        $type = create(TechOperationType::class);

        $this->assertInstanceOf(
            'Illuminate\Database\Eloquent\Collection', $type->tech_operations
        );
    }

    public function test_it_belongs_to_many_tech_operation_params()
    {
        $type = create(TechOperationType::class);

        $type->tech_operation_params()->attach(
            $param = create(TechOperationParam::class)
        );

        $this->assertDatabaseHas('tech_operation_param_type', [
            'tech_operation_type_id' => $type->id,
            'tech_operation_param_id' => $param->id
        ]);
    }
}
