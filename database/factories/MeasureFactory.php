<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Measure;
use Faker\Generator as Faker;

$factory->define(Measure::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'code' => $faker->languageCode
    ];
});
