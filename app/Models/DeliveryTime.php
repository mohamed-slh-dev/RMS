<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryTime extends Model
{
    use HasFactory;

    protected $table = 'delivery_times';


    protected $fillable = [

        'id',
        'timing',

    ];

    // relationship

    // ----------------

    public function customers()
    {

        return $this->hasMany('App\Models\Customer');
    }

    public function drivers()
    {

        return $this->hasMany('App\Models\Driver');
    }

    public function times()
    {

        return $this->hasMany(DriverTime::class);
    }
}
