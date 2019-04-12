<?php

use Faker\Generator as Faker;
use App\Models\Vehicle\Vehicle;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'external_id' => $faker->sentence(10)
    ];
});
