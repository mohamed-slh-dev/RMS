<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MealTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $meal_types = ['Breakfast', 'Lunch', 'Dinner', 'Snacks', 'Pre-Workout', 'Post-Workout'];


        // create meals
        for ($i=0; $i < count($meal_types); $i++) { 

            DB::table('meal_types')->insert([
                'name' => $meal_types[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        } // end for loop

        

        
    }
}
