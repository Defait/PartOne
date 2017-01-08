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
        'serial'    => $faker->unique()->randomNumber,
        'uuid'      => $faker->unique()->uuid,
        'hostname'  => 'backend0.phool.com',
        'vendor_id' => $faker->numberBetween(1,10),
    ];
});

$factory->define(App\Part::class, function (Faker\Generator $faker) {

    return [
        'type_id'   => $faker->numberBetween(1,5),
        'name'      => $faker->unique()->sentence(3, true),
        'vendor_id' => $faker->numberBetween(1,10),
    ];
});

$factory->define(App\Vendor::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->unique()->sentence(3, true),
    ];
});