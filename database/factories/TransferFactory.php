<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Transfer;

$factory->define(Transfer::class, function (Faker $faker) {
    return [
        'description'=>$faker->text($maxNbChars = 200),
        'amount'     => $faker->numberBetween($min = 500, $max = 900),
        'wallet_id'  => $faker->randomDigitNotNull,
    ];
});
