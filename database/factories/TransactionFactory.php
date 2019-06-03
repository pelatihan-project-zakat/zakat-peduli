<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    return [
        'kode_transaksi' =>$faker->unique()->numerify('### #### ###'),
        'tanggal' =>$faker->dateTimeThisMonth($max = 'now', $timezone = null),
        'email' =>$faker->unique()->freeEmail,
        'program' => 'blm nyambung tbl',
        'jumlah_donasi' =>$faker->numberBetween($min = 500000, $max = 5000000),
        'status'=>$faker->numberBetween($min = 0, $max = 1),
    ];
});
