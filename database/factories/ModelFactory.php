<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use Faker\Generator,
    App\Models\Email;

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define('App\Models\Email', function ( Generator $faker ) {
    return [
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
        'email'      => $faker->email,
        'subject'    => $faker->realText(50),
        'body'       => $faker->realText(500),
        'phone'      => $faker->phoneNumber,
    ];
});
