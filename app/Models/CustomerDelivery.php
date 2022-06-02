<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDelivery extends Model
{
    use HasFactory;

    protected $table = 'customer_deliveries';


    protected $fillable = [

        'customer_id',
        'driver_id',
        'delivery_company_id',

        'date',
        'status',


    ];



    // relationship
    public function customer()
    {

        return $this->belongsTo('App\Models\Customer');
    }

    public function driver()
    {

        return $this->belongsTo('App\Models\Driver');
    }

    
    public function deliveryCompany()
    {

        return $this->belongsTo('App\Models\DeliveryCompany','delivery_company_id');
    }

     
    public function deliveryCompanyDriver()
    {

        return $this->belongsTo('App\Models\DeliveryCompanyDriver','delivery_company_driver_id');
    }

    // ---------------------


    

}
