<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerChat extends Model
{
    use HasFactory;


    protected $table = 'customer_chats';



    protected $fillable = [

        'customer_id', //
        'user_id', //whoever use the system to send (null when customer send)

        'type', //admin - customer
        'message',
    ];



    // relationships
    public function customer()
    {

        return $this->belongsTo('App\Models\Customer');
    }


    public function user()
    {

        return $this->belongsTo('App\Models\User');
    }


}
