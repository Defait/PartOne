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

$factory->define(App\Device::class, function (Faker\Generator $faker) {

    return [
        'serial' => $faker->unique()->randomNumber,
        'uuid' => $faker->unique()->uuid,
        'hostname' => 'backend0.phool.com',
    ];
});

$factory->define(App\Part::class, function (Faker\Generator $faker) {

    return [
        'type_id' => $faker->numberBetween(0,5),
        'name' => $faker->unique()->sentence(3, true),
        'vendor_id' => $faker->numberBetween(0,10),
        'device_id' => $faker->numberBetween(0,10),
    ];
});
