<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChifEndTime extends Model
{
    use HasFactory;

    protected $table = 'chif_end_times';


    protected $fillable = [
        
        'time',
        'date',
        'chif_id',

    ];

}
