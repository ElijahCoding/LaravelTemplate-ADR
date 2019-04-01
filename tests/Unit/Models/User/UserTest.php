<?php

namespace Tests\Unit\Models\User;

use App\User;
use Tests\TestCase;
use App\Models\Region;

class UserTest extends TestCase
{
    public function test_a_user_has_many_or_belongs_to_many_regions()
    {
        $user = create(User::class);

        $user->regions()->attach(
            $region = create(Region::class)
        );

        $this->assertInstanceOf(Region::class, $user->regions->first());
    }
}
