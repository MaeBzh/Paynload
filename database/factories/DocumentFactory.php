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
$factory->defineAs(App\DocumentDossier::class, 'document_client', function (Faker\Generator $faker) {
    return [
        'chemin' => storage_path('fakefile.txt'),
        'md5' => md5_file(storage_path('fakefile.txt')),
        'taille' => filesize(storage_path('fakefile.txt')),
        'extension' => 'txt'
    ];
});

$factory->defineAs(App\DocumentDossier::class, 'facture_client', function (Faker\Generator $faker) {
    return [
        'chemin' => storage_path('fakefile.txt'),
        'md5' => md5_file(storage_path('fakefile.txt')),
        'taille' => filesize(storage_path('fakefile.txt')),
        'extension' => 'txt'
    ];
});