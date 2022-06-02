<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagePlanMeal extends Model
{
    use HasFactory;

    protected $table = 'package_plan_meals';


    protected $fillable = [

        'package_plan_id',
        'package_meal_id',
        'meal_type_id',

        'default',
    ];


    // relationship
    public function type()
    {

        return $this->belongsTo('App\Models\MealType', 'meal_type_id');
    }

    public function plan()
    {

        return $this->belongsTo('App\Models\PackagePlan', 'package_plan_id');
    }


    public function meal()
    {

        return $this->belongsTo('App\Models\PackageMeal', 'package_meal_id');
    }


    public function customers()
    {

        return $this->hasMany('App\Models\CustomerMeal');
    }

}
