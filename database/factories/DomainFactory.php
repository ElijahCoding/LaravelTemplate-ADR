<?php

use Faker\Generator as Faker;
use App\Models\Permissions\Domain;

$factory->define(Domain::class, function (Faker $faker) {
    return [
        'name' => $faker->word(4)
    ];
});
