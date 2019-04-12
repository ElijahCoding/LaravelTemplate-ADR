<?php

namespace Tests\Unit\Models\Tech\Type;

use Tests\TestCase;
use App\Models\Tech\Type\TechOperationType;
use App\Models\Tech\Operation\TechOperation;

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
    }
}
