<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = 'districts';


    protected $fillable = [
        'name',
        'city_id',
    ];



    // relationship
    public function city()
    {

        return $this->belongsTo('App\Models\City');
    }

  

    // ------------------------


    
    public function customers()
    {

        return $this->hasMany('App\Models\Customer');
    }

    // --------------

    public function drivers()
    {

        return $this->hasMany('App\Models\DriverDistrict');
    }

    public function companydrivers()
    {

        return $this->hasMany('App\Models\CompanyDriverDistrict');
    }

    public function companies()
    {

        return $this->hasMany('App\Models\DeliveryCompanyDistrict');
    }

    public function users()
    {

        return $this->hasMany('App\Models\UserDistrict');
    }


    public function leads()
    {

        return $this->hasMany('App\Models\Lead');
    }
    
    
    public function onetimeOrders()
    {

        return $this->hasMany('App\Models\OnetimeOrder');
    }
}
