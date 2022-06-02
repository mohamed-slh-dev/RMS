<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverDistrict extends Model
{
    use HasFactory;

    protected $table = 'driver_districts';


    protected $fillable = [

        'driver_id',
        'district_id',

    ];



    // relationship

    public function district()
    {

        return $this->belongsTo('App\Models\District', 'district_id', 'id');
    }

    public function driver()
    {

        return $this->belongsTo('App\Models\Driver');
    }
    


    
}
