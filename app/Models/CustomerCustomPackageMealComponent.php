<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCustomPackageMealComponent extends Model
{
    use HasFactory;

    protected $table = 'customer_custom_package_meal_components';


    protected $fillable = [

        'cp_meals_id',
        'component_id',

        'quantity',

    ];




    // relationship
    public function customPackageMeal()
    {

        return $this->belongsTo('App\Models\CustomerCustomPackageMeal');
    }


    // relationship
    public function component()
    {

        return $this->belongsTo('App\Models\Component');
    }

}
