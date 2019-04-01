<?php

namespace Tests\Unit\Models\Region;

use App\User;
use Tests\TestCase;
use App\Models\Region;

class RegionTest extends TestCase
{
    public function test_a_region_has_many_or_belongs_to_many_users()
    {
        $region = create(Region::class);

        $region->users()->attach(
            $user = create(User::class)
        );

        $this->assertInstanceOf(User::class, $region->users->first());
    }
}
