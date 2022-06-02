<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MarginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // create meal
        DB::table('margins')->insert([
            'operation' => 0,
            'margin' => 0,
            'packing' => 0,
            'cold_drink' => 0,
            'hot_drink' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


    }
}
