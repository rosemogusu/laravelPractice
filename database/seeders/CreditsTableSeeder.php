<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as faker;

class CreditsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        foreach(range(1, 30) as $index){

            DB::table('credits')->insert([
                'amount'=>$faker->numberBetween(10000, 50000),
                'channel'=>$faker->word(),
                'description'=>$faker->sentence(1,20),
                'tenant_id'=>$faker->numberBetween(1,40),
                'transaction_id'=>$faker->numberBetween(1,70),
            ]);

            }

    }
}
