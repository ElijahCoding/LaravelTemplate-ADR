<?php

namespace Tests\Unit\Models\User\Permission;

use App\User;
use Tests\TestCase;
use App\Models\Permissions\Domain;

class DomainTest extends TestCase
{
    public function test_it_belongs_to_many_users()
    {
        $domain = create(Domain::class);

        $domain->users()->attach(
            $user = create(User::class)
        );

        $this->assertDatabaseHas('user_domain', [
            'user_id' => $user->id,
            'domain_id' => $domain->id
        ]);
    }
}
