<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Donor;
use Faker\Generator as Faker;

$factory->define(Donor::class, function (Faker $faker) {
    return [
        'name' =>$faker->name(),
        'email' =>$faker->unique()->safeEmail,
        'phone' =>$faker->phoneNumber(),
        'address' =>$faker->address(),
        'transaction_number' =>$faker->numberBetween($min = 1, $max = 10),
        'total_donation' =>$faker->numberBetween($min = 500000, $max = 5000000),        
    ];
});
