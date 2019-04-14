<?php

use Faker\Generator as Faker;

$factory->define(App\Curriculums::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'direction' => $faker->url
    ];
});
