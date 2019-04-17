<?php

namespace Tests\Unit\Models\User;

use App\Models\User;
use Tests\TestCase;
use App\Models\Permissions\{
    Permission, Role, Domain
};

class UserTest extends TestCase
{
    public function test_it_hashes_the_password_when_creating()
    {
        $user = factory(User::class)->create([
            'password' => bcrypt('cats')
        ]);

        $this->assertNotEquals($user->password, 'cats');
    }

    public function test_it_belongs_to_many_permissions()
    {
        $user = create(User::class);

        $user->permissions()->attach(
            $permission = create(Permission::class)
        );

        $this->assertDatabaseHas('user_permission', [
            'user_id' => $user->id,
            'permission_id' => $permission->id
        ]);
    }

    public function test_it_belongs_to_a_role()
    {
        $user = create(User::class);

        $this->assertInstanceOf(Role::class, $user->role->first());
    }

    public function test_it_belongs_to_many_domains()
    {
        $user = create(User::class);

        $user->domains()->attach(
            $domain = create(Domain::class)
        );

        $this->assertDatabaseHas('user_domain', [
            'user_id' => $user->id,
            'domain_id' => $domain->id
        ]);
    }
}
