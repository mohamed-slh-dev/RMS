<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';



    protected $fillable = [

        'fname',
        'lname',
        'phone',
        'gender',
        'birthdate',
        'height',
        'weight',
        'activity',
        'email',
        'password',
        'city_id',
        'district_id',
        'address',
        'block_number',
        'floor',
        'flat_number',
        'package_id',
        'meals', //sepearted by commas
        'note',
        'from_date',
        'to_date',
        'cutlery',
        'bag',
        'cash_collection',
        'delivery_days',
        'delivery_time_id',
        'delivery_instructions',
        'linked_customer',
        'manager_id',
        
    ];



    // relationships

    public function city()
    {

        return $this->belongsTo('App\Models\City');

    }

    public function district() {

        return $this->belongsTo('App\Models\District');
    }


    public function package()
    {

        return $this->belongsTo('App\Models\Package');

    }


    public function deliveryTime()
    {

        return $this->belongsTo('App\Models\DeliveryTime');

    }

    public function manager()
    {

        return $this->belongsTo('App\Models\User');
    }

    // ------------------


    public function meals()
    {

        return $this->hasMany('App\Models\CustomerMeal');

    }


    public function excludes()
    {

        return $this->hasMany('App\Models\CustomerExclude');
    }



    public function customPackages()
    {

        return $this->hasMany('App\Models\CustomerCustomPackage');

    }


    public function customPackageMeals()
    {

        return $this->hasMany('App\Models\CustomerCustomPackageMeal');

    }


    public function deliveries()
    {

        return $this->hasMany('App\Models\CustomerDelivery');
    }


    public function payments()
    {

        return $this->hasMany('App\Models\CustomerPayment');
    }

    public function subs()
    {

        return $this->hasMany('App\Models\CustomerSubscription');
    }

    public function feedbacks()
    {

        return $this->hasMany('App\Models\CustomerFeedback');
    }

    public function planMeals()
    {

        return $this->hasMany('App\Models\CustomerFeedback');
    }
    
    public function purchases()
    {

        return $this->hasMany('App\Models\CustomerPurchase');
    }


    public function messages()
    {

        return $this->hasMany('App\Models\CustomerChat');
    }
}

