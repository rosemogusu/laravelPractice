<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();

        foreach(range(0,70)as $index){
            DB::table('users')->insert([
                'first_name'=>$faker->word(0,5),
                'last_name'=>$faker->word(0,5),
                'email'=>$faker->unique()->safeEmail(),
                'password'=>bcrypt('password'),
                'role_id'=>$faker->numberBetween(1,4)
            ]);
        }
    }
}
