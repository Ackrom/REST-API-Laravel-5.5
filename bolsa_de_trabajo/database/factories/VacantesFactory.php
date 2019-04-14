<?php

use Faker\Generator as Faker;

$factory->define(App\Vacantes::class, function (Faker $faker) {
    return [
        'salary'=>$faker->numberBetween($min = 1000, $max = 9000),
        'name'=>$faker->jobTitle,
        'description'=>$faker->text
    ];
});
