<?php

namespace Tests\Unit\Models\Tech\Operation;

use Tests\TestCase;
use App\Models\Tech\Type\TechOperationType;
use App\Models\Tech\Operation\TechOperation;

class TechOperationTest extends TestCase
{
    public function test_an_operation_belongs_to_a_type()
    {
        $operation = create(TechOperation::class);

        $this->assertInstanceOf(TechOperationType::class, $operation->tech_operation_type->first());
    }
}
