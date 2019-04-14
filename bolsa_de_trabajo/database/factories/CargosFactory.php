<?php

use Faker\Generator as Faker;

$factory->define(App\Cargos::class, function (Faker $faker) {
    return [
        'name'=>$faker->jobTitle
    ];
});
