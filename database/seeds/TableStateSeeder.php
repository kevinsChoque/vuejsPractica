<?php

use Illuminate\Database\Seeder;
use App\State;

class TableStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(State::class,5)->create();
    }
}
