<?php

use Faker\Generator as Faker;

$factory->define(App\Phone::class, function (Faker $faker) {
    return [
        'title' => 'Cell',
        'number' => $faker->phoneNumber
    ];
});
