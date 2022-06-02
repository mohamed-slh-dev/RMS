<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryCompany extends Model
{
    use HasFactory;

    protected $table = 'delivery_companies';


    protected $fillable = [

        'name',
        'phone',
        'email',
        'password',
        'city_id',
        'pickuptime_start',
        'pickuptime_end',
        'attachment',
        'dubai_charge',
        'abudhabi_charge',
        'sharjah_charge',
        'ajman_charge',
        'ummalquwain_charge',
        'alain_charge',
        'rak_charge',
        

    ];

    public function city()
    {

        return $this->belongsTo('App\Models\City');
    }



    // ---------------


    public function deliveries()
    {

        return $this->hasMany('App\Models\CustomerDelivery','delivery_company_id');

    }


    public function districts()
    {

        return $this->hasMany('App\Models\DeliveryCompanyDistrict');
    }

    public function drivers()
    {

        return $this->hasMany('App\Models\CompanyDriver','delivery_company_id');

    }
}
