<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as faker;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        foreach(range(1,70)as $index){
            DB::table('transactions')->insert([
              'transaction_code'=>$faker->numberBetween(62,29999299),
              'amount'=>$faker->numberBetween(20000,100000),
              

            ]);
        }

    }
}
