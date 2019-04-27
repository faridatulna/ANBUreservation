<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Reservation;

$factory->define(Reservation::class, function (Faker $faker) {
    $nrp_default = "0511174000";
    //query id lab
    $lab_ids = DB::table('laboratories')->select('id')->get();
    $lab_id = $faker->randomElement($lab_ids)->id;
    //query no pc
    $pcs = DB::table('computers')->where('id', $lab_id)->get();
    $pc = $faker->randomElement($pcs)->no_pc;

    return [
        'nama' => $faker->firstName,
        'nrp' => $nrp_default.strval(rand(1000, 9999)),
        'email' => $faker->unique()->safeEmail,
        'id_lab' => $lab_id,
        'no_pc' => $pc,
        'no_hp' => $faker->e164phoneNumber,
        'proposal' => $faker->text(10).'pdf',
        'status' => $faker->numberBetween(0, 5),
        'tgl_pinjam' => $faker->dateTime()
    ];
});
