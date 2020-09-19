<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;


$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'uuid' => $faker->uuid,
        'accountant_id' => 3,
    ];
});
