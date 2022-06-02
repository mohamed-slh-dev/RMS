<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantMealPlanMeal extends Model
{
    use HasFactory;

    protected $table = 'restaurant_meal_plan_meals';


    protected $fillable = [

        'restaurant_meal_plan_id',
        'meal_type_id',

    ];

    public function plan()
    {
        return $this->belongsTo('App\Models\RestaurantMealPlan');
    }

    public function mealType()
    {
        return $this->belongsTo('App\Models\MealType','meal_type_id');
    }
}
