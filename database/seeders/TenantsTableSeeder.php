<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as faker;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();

        foreach(range(1,40) as $index){
            DB::table('tenants')->insert([
              'user_id'=>$faker->numberBetween(1,70),
              'house_id'=>$faker->numberBetween(0,20),

            ]);
        }

    }
}
