<?php

namespace Tests\Unit\Models\User\Permission;

use App\Models\User;
use Tests\TestCase;
use App\Models\Permissions\Role;

class RoleTest extends TestCase
{
    public function test_it_has_many_users()
    {
        $role = create(Role::class);

        $user = create(User::class, [
            'role_id' => $role->id
        ]);

        $this->assertTrue($role->users->contains($user));
    }
}
