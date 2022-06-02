<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnetimeOrderMeal extends Model
{
    use HasFactory;


    protected $table = 'onetime_order_meals';


    protected $fillable = [

        'order_id',
        'meal_id',
        'package_id',
        'price',
        'selling_price',
    ];


    // relationship
    public function order()
    {

        return $this->belongsTo('App\Models\OnetimeOrder', 'order_id');
    }

    public function package()
    {
        return $this->belongsTo('App\Models\PackageMeal', 'package_id');
    }


    public function meal()
    {
        return $this->belongsTo('App\Models\PackageMeal', 'meal_id');
    }
}
