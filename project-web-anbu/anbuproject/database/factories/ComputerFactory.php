<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Computer;

$factory->define(Computer::class, function (Faker $faker) {
    $lab_ids = DB::table('laboratories')->select('id')->get();
    $lab_id = $faker->randomElement($lab_ids)->id;

    return [
        'status' => rand(0, 2),
        'id_lab' => $lab_id,
        'no_pc' => rand(1, 10)
    ];
});
