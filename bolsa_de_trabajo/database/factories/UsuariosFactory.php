<?php

use Faker\Generator as Faker;

$factory->define(App\Usuarios::class, function (Faker $faker) {
    switch (rand(1,2)) {
        case 2:
            $type='business';
            break;
        default:
            $type='candidate';    
            break;
    }

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'type' => $type,
    ];
});
