<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;


    protected $table = 'cities';

    protected $fillable = [
        'name', 'charge'
    ];





    // relationship



    // --------------------

    public function districts()
    {

        return $this->hasMany('App\Models\Districts');
    }

    public function customers()
    {

        return $this->hasMany('App\Models\Customer');
    }

    public function drivers()
    {

        return $this->hasMany('App\Models\Driver');
    }

  public function delivery_companies()
    {

        return $this->hasMany('App\Models\DeliveryCompany');
    }

    public function deliveryCompanyDrivers()
    {

        return $this->hasMany('App\Models\DeliveryCompanyDriver');
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
