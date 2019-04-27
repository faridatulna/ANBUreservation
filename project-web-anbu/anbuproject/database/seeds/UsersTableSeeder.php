<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Laboratory;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\User::class, 10)->create();
    	$faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'role_id' => $faker->numberBetween(0,1),
                'id_lab' => $faker->numberBetween(1,10),
                'email' => $faker->email,
                'password' => Hash::make('123'),
            ]);
        }
    }
    
}
