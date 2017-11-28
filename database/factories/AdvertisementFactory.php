<?php

use App\Advertisement;
use App\User;
use Faker\Generator as Faker;

$factory->define(Advertisement::class, function (Faker $faker) {
    return [
        'title' => $faker->text(20),
        'description' => $faker->text(150),
        'user_id' => 1,
    ];
});