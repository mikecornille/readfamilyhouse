<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Reservation::class, function (Faker $faker) {
    static $password;

    return [
        'user_name' => $faker->name(),
        'user_email' => $faker->email(),
        'user_id' => $faker->randomNumber($nbDigits = 1, $strict = true),
        'guests' => $faker->sentence(),
        'guest_count' => $faker->randomNumber($nbDigits = 1, $strict = true),
        'start_date' => $faker->date($format = 'm/d/Y'),
        'end_date' => $faker->date($format = 'm/d/Y'),
        
        ];
});
