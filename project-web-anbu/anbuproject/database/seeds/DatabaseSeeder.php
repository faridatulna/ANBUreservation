<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaboratoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ComputersTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
    }
}
