<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Wallet;

$factory->define(Wallet::class, function (Faker $faker) {
    return [
       'money' => $faker->numberBetween($min = 500, $max = 900)
    ];
});
