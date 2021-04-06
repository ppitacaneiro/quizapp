<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Respondent;
use Faker\Generator as Faker;

$factory->define(Respondent::class, function (Faker $faker) {
    return [
        'email'     => $faker->unique()->safeEmail,
        'name'      => $faker->name,
        'country'   => $faker->country,
        'age'       => $faker->unique()->numberBetween(1,90),
        'sex'       => $faker->randomElement(['male','female']),
    ];
});
