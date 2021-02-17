<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as faker;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $faker =faker::create();
    foreach(range(1,20)as $index){
        DB::table('houses')->insert([
            'house_type_id'=>$faker->numberBetween(1,20),
            'landlord_id'=>$faker->numberBetween(1,20),
            'agent_id'=>$faker->numberBetween(1,20),
            'description'=>$faker->sentence(1,10),
        ]);
    }
    }
}
