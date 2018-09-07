<?php

use Faker\Generator as Faker;

$factory->define(App\Address::class, function (Faker $faker) {
    return [
        'title' => 'Address',
        'line1' => $faker->streetAddress, 
        'line2' => $faker->secondaryAddress, 
        'city' => $faker->city, 
        'state' => $faker->state, 
        'zip' => $faker->postcode, 
        'country' => $faker->country
    ];
});
