<?php

use Illuminate\Database\Seeder;
use App\Computer;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Computer::class, 20)->create();
    }
}
