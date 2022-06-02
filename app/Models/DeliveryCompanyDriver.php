<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryCompanyDriver extends Model
{
    use HasFactory;

    protected $table = 'delivery_company_drivers';


    protected $fillable = [

        'name',
        'phone',
        'email',
        'license',
        'password',
        'city_id',
        'license_img',
        'profile_img',
        'company_id'


    ];

    public function company()
    {

        return $this->belongsTo('App\Models\DeliveryCompany','delivery_company_id');
    }

    public function city()
    {

        return $this->belongsTo('App\Models\City');
    }
    
    public function deliveries()
    {

        return $this->hasMany('App\Models\CustomerDelivery','delivery_company_driver_id');

    }


    public function districts()
    {

        return $this->hasMany('App\Models\DeliveryCompanyDriverDistrict','driver_id');
    }

}
