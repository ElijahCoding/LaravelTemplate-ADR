<?php

use Faker\Generator as Faker;
use App\Models\Vehicle\VehicleType;

$factory->define(VehicleType::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'external_id' => $faker->sentence(10)
    ];
});
