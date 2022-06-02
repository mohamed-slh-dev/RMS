<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftEndTime extends Model
{
    use HasFactory;

    protected $table = 'shift_end_times';


    protected $fillable = [
        'time',
    ];

}
