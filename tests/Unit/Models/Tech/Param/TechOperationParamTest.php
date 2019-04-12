<?php

namespace Tests\Unit\Models\Tech\Param;

use Tests\TestCase;
use App\Models\Tech\Type\TechOperationType;
use App\Models\Tech\Operation\Params\TechOperationParam;

class TechOperationParamTest extends TestCase
{
    public function test_it_belongs_to_many_tech_operation_types()
    {
        $param = create(TechOperationParam::class);

        $param->tech_operation_types()->attach(
            $type = create(TechOperationType::class)
        );

        $this->assertDatabaseHas('tech_operation_param_type', [
            'tech_operation_type_id' => $type->id,
            'tech_operation_param_id' => $param->id
        ]);
    }
}
