<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPayment extends Model
{
    use HasFactory;

    protected $table = 'customer_payments';


    protected $fillable = [

        'customer_id',
        'card_number',

        'security_code',
        'expiration',
        'paypal_email',
        'cash_on_delivery',
        'bank_transfer',


    ];


    // relationship


    public function customer()
    {

        return $this->belongsTo('App\Models\Customer');
    }

}
