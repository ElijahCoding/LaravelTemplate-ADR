<?php

use Faker\Generator as Faker;
use App\Models\Permissions\{Permission, Module};

$factory->define(Permission::class, function (Faker $faker) {
    return [
        'module_id' => factory(Module::class)->create()->id,
        'name' => $faker->word(4)
    ];
});
