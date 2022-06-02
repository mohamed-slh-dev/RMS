<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPurchase extends Model
{
    use HasFactory;


    protected $table = 'customer_purchases';


    protected $fillable = [

        'customer_id',
        'item_id', //store item id
        'quantity',
        'delivery_date',
    ];


    // relationship


    public function customer()
    {

        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }


    public function item()
    {

        return $this->belongsTo('App\Models\StoreItem', 'item_id');
    }


}
