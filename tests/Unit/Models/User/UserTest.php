<?php

namespace Tests\Unit\Models\User;

use App\User;
use Tests\TestCase;
use App\Models\Region;
use App\Models\Profile;

class UserTest extends TestCase
{
    public function test_it_hashes_the_password_when_creating()
    {
        $user = factory(User::class)->create([
            'password' => bcrypt('cats')
        ]);

        $this->assertNotEquals($user->password, 'cats');
    }

    public function test_a_user_has_many_or_belongs_to_many_regions()
    {
        $user = create(User::class);

        $user->regions()->attach(
            $region = create(Region::class)
        );

        $this->assertInstanceOf(Region::class, $user->regions->first());
    }

    public function test_it_has_a_profile()
    {
        $user = create(User::class);

        $profile = create(Profile::class, [
            'user_id' => $user->id
        ]);

        $this->assertInstanceOf(Profile::class, $user->profile);
    }

    public function test_it_belongs_to_many_permission()
    {
        
    }
}
