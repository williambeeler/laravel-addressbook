<?php

use Faker\Generator as Faker;

//Fake some accounts ... 
$factory->define(App\Account::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'status' => 'active'
    ];
});
