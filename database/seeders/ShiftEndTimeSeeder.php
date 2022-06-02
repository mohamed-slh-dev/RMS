<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class ShiftEndTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('shift_end_times')->insert([
            'time' =>Date('H:i:s'),
           
        ]);

    }
}
