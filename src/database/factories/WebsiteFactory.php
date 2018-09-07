<?php

use Faker\Generator as Faker;

$factory->define(\App\Website::class, function (Faker $faker) {
    return [
        'title' => 'Website',
        'website' => $faker->domainName
    ];
});
