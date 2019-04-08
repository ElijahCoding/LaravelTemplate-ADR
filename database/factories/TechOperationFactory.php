<?php

use Faker\Generator as Faker;
use App\Models\Tech\Operation\TechOperation;

$factory->define(TechOperation::class, function (Faker $faker) {
    return [
        'tech_operation_type_id' => factory('App\Models\Tech\Type\TechOperationType')->create()->id,
        'title' => $faker->sentence(4)
    ];
});
