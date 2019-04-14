<?php

use Faker\Generator as Faker;

$factory->define(App\Empresas::class, function (Faker $faker) {
    return [
        'name'=>$faker->company,
        'web_page'=>$faker->domainName,
        'description'=>$faker->text
    ];
});
