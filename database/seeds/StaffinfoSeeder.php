<?php

use Illuminate\Database\Seeder;

class StaffinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(\App\Staffinfo::class,50)->create();
    }
}
