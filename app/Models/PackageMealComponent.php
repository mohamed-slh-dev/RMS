<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageMealComponent extends Model
{
    use HasFactory;

    protected $table = 'package_meal_components';


    protected $fillable = [

        'package_meals_id',
        'component_id',
        'quantity',

    ];


    // relationship
    public function package()
    {
        return $this->belongsTo('App\Models\PackageMeal');
    }


    public function component()
    {
        return $this->belongsTo('App\Models\Component');
    }


    // ------------------------


}
