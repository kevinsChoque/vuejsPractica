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
        $this->truncateTablas([
            'city',
            'state'
        ]);

        $this->call([
            TableStateSeeder::class,
            TablaCitySeeder::class
            
        ]);
        // $this->call(TablaCitySeeder::class);
        // $this->call(TableStateSeeder::class);
    }

    protected function truncateTablas(array $tablas)
    {
        DB::statement('set foreign_key_checks = 0;');
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }

        DB::statement('set foreign_key_checks = 1;');
    }
}
