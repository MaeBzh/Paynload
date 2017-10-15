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
$factory->define(App\Entreprise::class, function (Faker\Generator $faker) {
    return [
        'raison_sociale' => $faker->companySuffix,
        'adresse_rue' => $faker->streetAddress,
        'adresse_cp' => $faker->postcode,
        'adresse_ville' => $faker->city,
        'telephone' => $faker->phoneNumber,
        'siret' => $faker->siret,
        'civilite_dirigeant' => $faker->randomElement(['Monsieur', 'Madame']),
        'nom_dirigeant' => $faker->lastName,
        'prenom_dirigeant' => $faker->firstName,
        'est_bloque' => false,

        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('password'),
        'remember_token' => str_random(10)
    ];
});
