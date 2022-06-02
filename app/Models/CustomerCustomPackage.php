<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCustomPackage extends Model
{
    use HasFactory;

    protected $table = 'customer_custom_packages';


    protected $fillable = [

        'customer_id',
        'cals',
        'proteins',
        'carbs',
        'fats',
        'marcos_divide',

    ];



    // relationship
    public function customer()
    {

        return $this->belongsTo('App\Models\Customer');
    }

}
