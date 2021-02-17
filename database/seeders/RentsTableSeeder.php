<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as faker;

class RentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        foreach(range(1,20)as $index){
            DB::table('rents')->insert([
                'house_id'=>$faker->numberBetween(0,20),
                'amount_due'=>$faker->numberBetween(1,30000),
                'total_amount'=>$faker->numberBetween(10000,50000),
                'payment_status'=>$faker->numberBetween(0,3),
            ]);
        }
    }
}
