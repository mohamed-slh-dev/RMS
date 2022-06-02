<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagePlan extends Model
{
    use HasFactory;

    protected $table = 'package_plans';


    protected $fillable = [

        'package_id',
        'date',

    ];




    // relationship
    public function package()
    {
        return $this->belongsTo('App\Models\Package');
    }

    

    // ------------------

    public function meals()
    {
        return $this->hasMany('App\Models\PackagePlanMeal', 'package_plan_id', 'id');
    }


}
