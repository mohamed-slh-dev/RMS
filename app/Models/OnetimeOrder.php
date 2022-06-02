<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnetimeOrder extends Model
{
    use HasFactory;


    protected $table = 'onetime_orders';


    protected $fillable = [

        'customer_name',
        'customer_phone',
        'customer_address',
        'city_id',
        'district_id',
        'note',
        'date',
        'status',


    ];



    // relationships
    public function meals()
    {

        return $this->hasMany('App\Models\OnetimeOrderMeal', 'order_id');
    }


    public function city()
    {

        return $this->belongsTo('App\Models\City', 'city_id');
    }

    public function district()
    {

        return $this->belongsTo('App\Models\District', 'district_id');
    }
    


}
