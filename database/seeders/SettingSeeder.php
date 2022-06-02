<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $role =  DB::table('settings')->insert([
            'name' => '',
            'po'=>0
        ]); 

    }
}
