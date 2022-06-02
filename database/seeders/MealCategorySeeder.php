<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class MealCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $meal_categories = ['Hot Drink', 'Cold Drink', 'Meal'];


        // create meals
        for ($i = 0; $i < count($meal_categories); $i++) {

            DB::table('meal_categories')->insert([
                'name' => $meal_categories[$i],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        } // end for loop


    }
}
