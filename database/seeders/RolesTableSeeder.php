<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\support\Facades\DB;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'description'=>'landlord'
        ]);
        DB::table('roles')->insert([
            'description'=>'agent'
        ]);
        DB::table('roles')->insert([
            'description'=>'tenant'
        ]);
        DB::table('roles')->insert([
            'description'=>'provider'
        ]);
    }
}
