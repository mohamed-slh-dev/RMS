<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    use HasFactory;

    protected $table = 'cuisines';


    protected $fillable = [
        'name',
    ];


    // relationship
    public function meals()
    {
        return $this->hasMany('App\Models\Meal');
    }


}
