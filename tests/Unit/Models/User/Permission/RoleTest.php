<?php

namespace Tests\Unit\Models\User\Permission;

use App\User;
use Tests\TestCase;
use App\Models\Permissions\Role;

class RoleTest extends TestCase
{
    public function test_it_belongs_to_many_users()
    {
        $role = create(Role::class);

        $role->users()->attach(
            $user = create(User::class)
        );

        $this->assertDatabaseHas('user_role', [
            'user_id' => $user->id,
            'role_id' => $role->id
        ]);
    }
}
