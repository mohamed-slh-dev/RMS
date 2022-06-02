<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantMealPlan extends Model
{
    use HasFactory;

    protected $table = 'restaurant_meal_plans';


    protected $fillable = [

        'name',

    ];

    public function planMeals()
    {
        return $this->hasMany('App\Models\RestaurantMealPlanMeal');
    }



}
