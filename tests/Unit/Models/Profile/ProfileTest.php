<?php

namespace Tests\Unit\Models\Profile;

use App\User;
use Tests\TestCase;
use App\Models\Profile;

class ProfileTest extends TestCase
{
    public function test_a_profile_belongs_to_a_user()
    {
        $profile = create(Profile::class);

        $this->assertInstanceOf(User::class, $profile->user);
    }
}
