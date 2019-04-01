<?php

use App\Models\Region;
use Faker\Generator as Faker;

$factory->define(Region::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->sentence(4),
        'slug' => str_slug($name)
    ];
});
