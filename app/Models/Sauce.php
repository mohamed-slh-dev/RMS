<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauce extends Model
{
    use HasFactory;

    protected $table = 'sauces';


    protected $fillable = [

        'name',
        'img',
        'price',
    ];

    // relationship


    // -------------------------


    public function components()
    {
        return $this->hasMany('App\Models\SauceComponent');
    }

    public function packageMeals()
    {
        return $this->hasMany('App\Models\PackageMeal');
    }
}
