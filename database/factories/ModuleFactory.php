<?php

use Faker\Generator as Faker;
use App\Models\Permissions\Module;

$factory->define(Module::class, function (Faker $faker) {
    return [
        'name' => $faker->word(4)
    ];
});
