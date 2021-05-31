<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Staffinfo;
use Faker\Generator as Faker;

$factory->define(Staffinfo::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'email' => $faker->email,
        'phone' => $faker->e164PhoneNumber,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});
