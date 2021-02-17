<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as faker;

class DebitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        foreach(range(1,40)as $index){
            DB::table('debits')->insert([
             'amount'=>$faker->numberBetween(20000,590000),
             'channel'=>$faker->word(),
             'description'=>$faker->sentence(),
             'landlord_id'=>$faker->numberBetween(1,20),
             'transaction_id'=>$faker->numberBetween(1,70)
            ]);
        }
    }
}
