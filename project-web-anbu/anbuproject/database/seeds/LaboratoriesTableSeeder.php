<?php

use Illuminate\Database\Seeder;
use App\Laboratory;

class LaboratoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Laboratory::class, 10)->create();
    }
}
