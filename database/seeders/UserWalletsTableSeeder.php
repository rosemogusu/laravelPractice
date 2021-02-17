<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as faker;

class UserWalletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        foreach(range(0,50)as $index){
            DB::table('user_wallets')->insert([
                'user_id'=>$faker->numberBetween(1,70),
                'fines'=>$faker ->numberBetween(1000,20000),
                'balance'=>$faker->numberBetween(100000,99999999)
            ]);
        }
    }
}
