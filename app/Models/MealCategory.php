<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealCategory extends Model
{
    use HasFactory;

    protected $table = 'meal_categories';


    protected $fillable = [
        'name',
    ];

    // relationship
    public function meals()
    {
        return $this->hasMany('App\Models\Meal');
    }

}
