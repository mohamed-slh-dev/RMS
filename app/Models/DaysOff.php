<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaysOff extends Model
{
    use HasFactory;

    protected $table = 'days_offs';


    protected $fillable = [
        'name',
    ];
}
