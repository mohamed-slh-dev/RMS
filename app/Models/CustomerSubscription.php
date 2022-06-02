<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSubscription extends Model
{
    use HasFactory;

    protected $table = 'customer_subscriptions';


    protected $fillable = [

        'customer_id',
        'start_date',
        'end_date',
        'package_id',
        'price',
        

    ];


    // relationship


    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }

    // relationship


    public function packages()
    {

        return $this->belongsTo('App\Models\Package');
    }


}
