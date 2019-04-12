<?php

use Faker\Generator as Faker;
use App\Models\Tech\Operation\Params\TechOperationParam;

$factory->define(TechOperationParam::class, function (Faker $faker) {
    return [
        'title' => $title = $faker->word(4),
        'slug' => str_slug($title),
        'unit' => $faker->word(4)
    ];
});
