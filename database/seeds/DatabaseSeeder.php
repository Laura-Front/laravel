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
         $this->call([
             CurrenciesSeeder::class,
             StaffinfoSeeder::class
         ]);

//         $this->call(CurrenciesSeeder::class);
//         $this->call(StaffinfoSeeder::class);
//         $this->call(UserSeeder::class);
    }
}
