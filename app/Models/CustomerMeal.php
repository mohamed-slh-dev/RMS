<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerMeal extends Model
{
    use HasFactory;

    protected $table = 'customer_meals';


    protected $fillable = [

        'customer_id',
        'date',
        'meal_type_id',
        'status',
        'package_plan_meal_id',


    ];


    // relationship
    public function customer()
    {

        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }

    public function mealType()
    {

        return $this->belongsTo('App\Models\MealType', 'meal_type_id');
    }

    public function chif()
    {

        return $this->belongsTo('App\Models\Chif');
    }

    public function meal()
    {

        return $this->belongsTo('App\Models\PackagePlanMeal', 'package_plan_meal_id');
    }
    

}
