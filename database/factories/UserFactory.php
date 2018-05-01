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

$factory->define(Locadora\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(Locadora\Models\Client::class, function (Faker $faker) {

    return [
        'cpf_cnpj' => $faker->randomNumber(null, false),
        'phone' => $faker->phoneNumber,
        'address' => $faker->streetName,
        'number' => $faker->buildingNumber,
        'neighborhood' => $faker->citySuffix,
        'zipcode' => $faker->postcode,
        'city' => $faker->city,
        'state' => 'SP',
        'country' => 'Brasil',
    ];
});

$factory->define(Locadora\Models\Category::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'doors' => $faker->numberBetween(2,5),
        'seats' => $faker->numberBetween(2,7),
        'windows' => $faker->word,
        'heating_cooling' => $faker->word,
        'transmission' => $faker->word,
        'airbag' => $faker->word,
        'brakes' => $faker->word,
    ];
});

$factory->define(Locadora\Models\Vehicle::class, function (Faker $faker) {

    return [
        'model' => $faker->word,
        'brand' => $faker->word,
        'color' => $faker->word,
        'engine' => $faker->numberBetween(1,5),
        'fuel' => 'gasolina',
        'year' => $faker->date('Y','now'),
        'license' => 'ABC-1985',
        'license_state' => 'SP',
        'price' => $faker->numberBetween(50, 100)
    ];
});
$factory->define(Locadora\Models\Image::class, function (Faker $faker) {

    return [
      'image_url' => $faker->imageUrl(640,480)
    ];

});

$factory->define(Locadora\Models\Rent::class, function (Faker $faker) {

    return [
        'user_id' => rand(3,10),
        'discount' => 0,
        'total_price' => 0,
        'status' => 0
    ];
});

$factory->define(Locadora\Models\RentItems::class, function (Faker $faker) {

    return [
    ];
});