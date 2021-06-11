<?php

use \App\Models\Staffinfo;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; // Or create faker examp. 10 data in 'staffinfos' table without StaffInfoFactory
use Illuminate\Support\Facades\DB;

class StaffinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       factory(\App\Models\Staffinfo::class,50)->create();
//        Staffinfo::factory()->count(50)->create();



// Or create faker examp. 10 data in 'staffinfos' table without StaffInfoFactory

//        DB::table('staffinfos')->truncate();
//
//        $faker = Faker::create();
//
//        foreach (range(1,10) as $index) {
//            DB::table('staffinfos')->insert([
//                'name' => $faker->name(),
//                'email' => $faker->email,
//                'phone' => $faker->e164PhoneNumber,
//                'created_at' => $faker->dateTime(),
//                'updated_at' => $faker->dateTime(),
//            ]);
//        }


    }
}
