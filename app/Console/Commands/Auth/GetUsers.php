<?php

namespace App\Console\Commands\Auth;

use App\User;
use Illuminate\Console\Command;

class GetUsers extends Command
{
    protected $signature = 'get:users';

    protected $description = 'Get all users';

    public function handle()
    {
        $file_path = public_path() . '/files/users.json';

        $response = array_slice(
            json_decode(file_get_contents($file_path)), 2
        );


        foreach ($response[0]->data as $index => $user) {
            User::create([
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone,
                'password' => $user->passwordHash,
                'position' => $user->position
            ]);
        }
    }
}
