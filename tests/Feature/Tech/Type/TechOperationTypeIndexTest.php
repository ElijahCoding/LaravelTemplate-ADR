<?php

namespace Tests\Feature\Tech\Type;

use Tests\TestCase;
use App\User;
use App\Models\Tech\Type\TechOperationType;

class TechOperationTypeIndexTest extends TestCase
{
    public function test_it_fails_if_unauthenticated()
    {
        $response = $this->json('GET', '/api/tech/operation/types')
                         ->assertStatus(401);
    }

    public function test_authenticated_users_can_get_a_collection_of_types()
    {
        $user = factory(User::class)->create();

        $types = factory(TechOperationType::class, 3)->create();

        $response = $this->jsonAs($user, 'GET', '/api/tech/operation/types');

        $types->each(function ($type) use ($response) {
            $response->assertJsonFragment([
                'en' => $type->en,
                'ru' => $type->ru
            ]);
        });
    }
}
