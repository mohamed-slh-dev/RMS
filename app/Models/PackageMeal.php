<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageMeal extends Model
{
    use HasFactory;

    protected $table = 'package_meals';


    protected $fillable = [

        'package_id',
        'meal_id',
        'meal_type_id',

        'price',
        'cals',
        'proteins',
        'carbs',
        'fats',

    ];



    // relationship
    public function package()
    {
        return $this->belongsTo('App\Models\Package');
    }


    public function sauce()
    {
        return $this->belongsTo('App\Models\Sauce');
    }


    public function meal()
    {
        return $this->belongsTo('App\Models\Meal');
    }

    
    public function mealType()
    {
        return $this->belongsTo('App\Models\MealType');
    }


    // ---------------------------------

    public function packagePlanMeals()
    {
        return $this->hasMany('App\Models\PackagePlanMeal');
    }


    public function components()
    {
        return $this->hasMany('App\Models\PackageMealComponent', 'package_meals_id', 'id');
    }




}
