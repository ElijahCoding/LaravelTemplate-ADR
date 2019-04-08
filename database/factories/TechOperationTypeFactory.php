<?php

use Faker\Generator as Faker;
use App\Models\Tech\Type\TechOperationType;

$factory->define(TechOperationType::class, function (Faker $faker) {
    return [
        'en' => $faker->sentence(4),
        'ru' => $faker->sentence(4)
    ];
});
