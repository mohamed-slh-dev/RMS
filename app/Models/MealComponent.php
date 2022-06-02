<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealComponent extends Model
{
    use HasFactory;

    protected $table = 'meal_components';


    protected $fillable = [

        'meal__id',
        'component_id',
    ];


    // relationship
    public function meal()
    {
        return $this->belongsTo('App\Models\Meal');
    }
    
    public function component()
    {
        return $this->belongsTo('App\Models\Component');
    }

}
