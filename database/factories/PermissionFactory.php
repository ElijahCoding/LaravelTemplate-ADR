<?php

use Faker\Generator as Faker;
use App\Models\Permissions\Permission;

$factory->define(Permission::class, function (Faker $faker) {
    return [
        'name' => $faker->word(4)
    ];
});
