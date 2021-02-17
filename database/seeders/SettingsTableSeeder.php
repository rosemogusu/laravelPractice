<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as faker;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        foreach(range(1,15) as $index){
            DB::table('settings')->insert([
            'house_id'=>$faker->numberBetween(0,20),
            'settings'=>[
                'deadlines'=>$faker->numberBetween(1 ,30),
                'rent'=>$faker->numberBetween(20000,60000),

            ]
            ]);
        }
    }
}
