<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packages';


    protected $fillable = [

        'name',
        'img',
        'desc',
        'price',
        'cals',
        'proteins',
        'carbs',
        'fats',


    ];


    // relationship

    // -------------------

    public function meals() {
        return $this->hasMany('App\Models\PackageMeal');
    }


    public function customers() {
        return $this->hasMany('App\Models\Customer');
    }

    public function subs()
    {
        return $this->hasMany('App\Models\CustomerSubscription');
    }


    public function plans()
    {
        return $this->hasMany('App\Models\PackagePlan');
    }
    



}
