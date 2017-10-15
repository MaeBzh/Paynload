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
$factory->define(App\Dossier::class, function (Faker\Generator $faker) {
    return [
        'reference' => \App\Dossier::generateReference(),
        'token' => \App\Dossier::generateToken(),
        'prix' => $faker->randomFloat(2, 3, 1500),
        'message' => $faker->realText(),
        'commentaire' => $faker->realText(),
        'date_invalidite' => $faker->dateTime(),
    ];
});
