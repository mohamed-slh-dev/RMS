<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Margin extends Model
{
    use HasFactory;


    protected $table = 'margins';


    protected $fillable = [

        'operation',
        'margin',
        'packing',
        'cold_drink',
        'hot_drink',
    
    ];


}
