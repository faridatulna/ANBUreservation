<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class userDummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                // 'id' => $index,
                'name' => $faker->name,
                'role_id' => 1,
                'id_lab' => 1,
                'email' => $faker->email,
                'password' => Hash::make('10'),
                //$faker->randomElement(['A','AB','B','BC','C']),
            ]);
        }
    }
}
