<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as faker;


class HouseTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        foreach(range(1,7)as $index){

            DB::table('house_types')->insert([
                'name'=>$faker->word(0,5),
                'description'=>$faker->sentence(1,10),
            ]);
        }
    }
}
