<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as faker;

class RentPaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        foreach(range(1,50)as $index){
            DB::table('rent_payments')->insert([
                'rent_id'=>$faker->numberBetween(1,20),
                'tenant_id'=>$faker->numberBetween(1,40),
                'amount'=>$faker->numberBetween(20000,50000),
            ]);
        }
    }
}
