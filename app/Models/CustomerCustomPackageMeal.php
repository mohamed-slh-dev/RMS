<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCustomPackageMeal extends Model
{
    use HasFactory;

    protected $table = 'customer_custom_package_meals';


    protected $fillable = [

        'customer_id',
        'meal_type_id',
        
        'cals',
        'proteins',
        'carbs',
        'fats',

    ];



    // relationship
    public function customer()
    {

        return $this->belongsTo('App\Models\Customer');
    }

    public function mealType()
    {

        return $this->belongsTo('App\Models\mealType');
    }


    // ----------------------

    public function components()
    {

        return $this->hasMany('App\Models\CustomerCustomPackageMealComponent');
    }
}
