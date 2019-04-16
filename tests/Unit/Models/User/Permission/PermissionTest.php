<?php

namespace Tests\Unit\Models\User\Permission;

use App\User;
use Tests\TestCase;
use App\Models\Permissions\{Permission, Module};

class PermissionTest extends TestCase
{
    public function test_it_belongs_to_many_users()
    {
        $permission = create(Permission::class);

        $permission->users()->attach(
            $user = create(User::class)
        );

        $this->assertDatabaseHas('user_permission', [
            'user_id' => $user->id,
            'permission_id' => $permission->id
        ]);
    }

    public function test_it_belongs_to_a_module()
    {
        $permission = create(Permission::class);

        $this->assertInstanceOf(Module::class, $permission->module->first());
    }
}
