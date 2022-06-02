<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $table = 'meals';


    protected $fillable = [

        'name',
        'meal_type_id',
        'meal_category_id',
        'department',
        'img',
        'gluten',
        'dairy',
        'spicy',
        'instructions',
        'cuisine_id',
        'sauce_id',

    ];


    // relationship
    public function category()
    {
        return $this->belongsTo('App\Models\MealCategory');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\MealType');
    }

    public function cuisine()
    {
        return $this->belongsTo('App\Models\Cuisine', 'cuisine_id');
    }


    public function sauce()
    {
        return $this->belongsTo('App\Models\Sauce', 'sauce_id');
    }


    // ------------------

    public function components()
    {
        return $this->hasMany('App\Models\MealComponent');
    }


    public function packages()
    {
        return $this->hasMany('App\Models\PackageMeal');
        
    }

    
}
