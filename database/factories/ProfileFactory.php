<?php

use App\User;
use Carbon\Carbon;
use App\Models\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class)->create()->id,
        'phone' => $faker->sentence(8),
        'position' => $faker->sentence(4),
        'last_login' => Carbon::now()
    ];
});
