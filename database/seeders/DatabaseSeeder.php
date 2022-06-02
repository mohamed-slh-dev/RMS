<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // city - district - cuisine
        $this->call(CitySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CuisineSeeder::class);

        // meal categories - meal types
        $this->call(MealCategorySeeder::class);
        $this->call(MealTypeSeeder::class);
        $this->call(MarginSeeder::class);


    }
}
