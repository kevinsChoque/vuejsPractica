<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

use App\City;

class TablaCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(City::class,20)->create();

        // $cities = [
        //     'city1',
        //     'city2',
        //     'city3'
        // ];
        // foreach($cities as $key => $value)
        // {
        //     DB::table('city')->insert([
        //         'nombre' => $value,
        //         'created_at' => Carbon::now()->format('y-m-d h:i:s')
        //     ]);
        // }
    }
}
