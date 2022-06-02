<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerFeedback extends Model
{
    use HasFactory;

    protected $table = 'customer_feedback';


    protected $fillable = [

        'customer_id',
        'subject',
        'rating',
        'date',

    ];


    // relationship


    public function customer()
    {

        return $this->belongsTo('App\Models\Customer');
    }

}
