<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CuisineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cuisines = ['Moroccan', 'Syrian', 'Sudanese', 'Algerian', 'American'];


        // create meals
        for ($i = 0; $i < count($cuisines); $i++) {

            DB::table('cuisines')->insert([
                'name' => $cuisines[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        } // end for loop


    }
}
