<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealType extends Model
{
    use HasFactory;

    protected $table = 'meal_types';


    protected $fillable = [
        'name',
    ];


    // relationship


    // --------------------

    public function meals()
    {
        return $this->hasMany('App\Models\Meal');
    }

    public function packageMeals()
    {
        return $this->hasMany('App\Models\PackageMeal');
    }

    public function packagePlanMeals()
    {
        return $this->hasMany('App\Models\PackagePlanMeal');
    }


    public function customerMeals()
    {
        return $this->hasMany('App\Models\CustomerMeal');
    }


    public function customPackageMeals()
    {
        return $this->hasMany('App\Models\CustomerCustomPackageMeal');
    }

    public function restaurantPlanTypes()
    {
        return $this->hasMany('App\Models\RestaurantMealPlanMeal');
    }

    



    

}
