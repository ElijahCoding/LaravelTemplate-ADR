<?php

use Faker\Generator as Faker;
use App\Models\Vehicle\VehicleCategory;

$factory->define(VehicleCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'external_id' => $faker->sentence(10)
    ];
});
