<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverTime extends Model
{
    use HasFactory;

    protected $table = 'driver_times';


    protected $fillable = [

        'driver_id',
        'timing_id',
        
    ];


    // relationships

    public function driver()
    {

        return $this->belongsTo('App\Models\Driver');
    }

    
    // didnt work had to do this (foreign key ,other modal key)
    public function time()
    {

        return $this->belongsTo(DeliveryTime::class, 'timing_id', 'id');
    }

    // -----------------

    public function customers() {

        return $this->hasMany('App\Models\Customer');
    }


    


}
