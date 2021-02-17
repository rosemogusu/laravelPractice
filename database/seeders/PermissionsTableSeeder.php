<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as faker;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        foreach (range(1, 6)as $index){
            DB::table('permissions')->insert([
                'name'=>$faker->word(1,5),
                'description'=>$faker ->sentence(1,15),
            ]);
        }
    }
}
