<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    public function test_it_requires_a_name()
    {
        $this->json('POST', 'api/auth/register')
             ->assertJsonValidationErrors(['name']);
    }

    public function test_it_requires_a_email()
    {
        $this->json('POST', 'api/auth/register')
            ->assertJsonValidationErrors(['email']);
    }

    public function test_it_requires_a_valid_email()
    {
        $this->json('POST', 'api/auth/register', [
            'email' => 'nope'
        ])
            ->assertJsonValidationErrors(['email']);
    }

    public function test_it_requires_a_unique_email()
    {
        $user = factory(User::class)->create();

        $this->json('POST', 'api/auth/register', [
            'email' => $user->email
        ])
            ->assertJsonValidationErrors(['email']);
    }

    public function test_it_requires_a_password()
    {
        $this->json('POST', 'api/auth/register')
            ->assertJsonValidationErrors(['password']);
    }

    public function test_it_registers_a_user()
    {
        $this->json('POST', 'api/auth/register', [
            'name' => $name = 'elijah',
            'email' => $email = 'elijah@elijah.com',
            'password' => 'secret'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => $email,
            'name' => $name
        ]);
    }

    public function test_it_returns_a_user_on_registration()
    {
        $this->json('POST', 'api/auth/register', [
            'name' => 'elijah',
            'email' => $email = 'elijah@elijah.com',
            'password' => 'secret'
        ])
            ->assertJsonFragment([
                'email' => $email
            ]);
    }
}
