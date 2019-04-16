<?php

use Faker\Generator as Faker;
use App\Models\Permissions\Role;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'name' => $faker->word(4)
    ];
});
