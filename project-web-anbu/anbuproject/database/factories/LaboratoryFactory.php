<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Laboratory;

$factory->define(Laboratory::class, function (Faker $faker) {
    $list_lab = ['RPL', 'NCC', 'KCV', 'LP', 'AJK', 'IGS', 'MIS', 'LP2', 'ALPRO', 'MI'];
    static $index = 0;
    return [
        'nama_lab' => $list_lab[$index++]
    ];
});
