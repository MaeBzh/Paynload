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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Client::class, function (Faker\Generator $faker) {
    return [
        'nom' => $faker->lastName,
        'prenom' => $faker->firstName,
        'adresse_rue' => $faker->streetAddress,
        'adresse_cp' => $faker->postcode,
        'adresse_ville' => $faker->city,
        'telephone' => $faker->phoneNumber,
        'est_bloque' => false,

        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('password'),
        'remember_token' => str_random(10)
    ];
});
