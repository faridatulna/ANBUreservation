<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Laboratory;

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

$factory->define(User::class, function (Faker $faker) {
    $lab_ids = DB::table('laboratories')->select('id')->get();
    $lab_id = $faker->randomElement($lab_ids)->id;
    return [
        'name' => $faker->firstName,
        'role_id' => $faker->numberBetween(0, 1),
        'id_lab' => $lab_id,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => $faker->password, // password
        'remember_token' => Str::random(10),
    ];
});
