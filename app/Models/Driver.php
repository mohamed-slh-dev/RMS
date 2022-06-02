<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $table = 'drivers';


    protected $fillable = [

        'name',
        'phone',
        'email',
        'license',
        'password',
        'city_id',
        'license_img',
        'profile_img',


    ];



    // relationship


    public function city()
    {

        return $this->belongsTo('App\Models\City');
    }



    // ---------------


    public function deliveries()
    {

        return $this->hasMany('App\Models\CustomerDelivery');

    }


    public function districts()
    {

        return $this->hasMany('App\Models\DriverDistrict');
    }


    public function times()
    {

        return $this->hasMany('App\Models\DriverTime');
    }

}
