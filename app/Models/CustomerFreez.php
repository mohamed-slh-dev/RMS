<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerFreez extends Model
{
    use HasFactory;

    protected $table = 'customer_freezs';


    protected $fillable = [
        
        'customer_id',
        'subject',
        'start_date',
        'end_date',

    ];
}
