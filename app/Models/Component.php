<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    protected $table = 'components';


    protected $fillable = [
        
        'name',
        'brand',
        'component_category_id',
        'measuringunit',
        'img',
        'wastage',
        'cals',
        'proteins',
        'carbs',
        'fats',
        'price',
        'quantity',
        'min_quantity',
        'increase',

    ];



    // relationships
    public function category()
    {
        return $this->belongsTo('App\Models\ComponentCategory');

    }


    // ----------------------

    public function sauceComponents()
    {
        return $this->hasMany('App\Models\SauceComponent');

    }


    public function mealComponents()
    {
        return $this->hasMany('App\Models\MealComponent');
    }


    public function itemComponents()
    {
        return $this->hasMany('App\Models\StoreItemComponent');
    }

    public function packageMealComponents()
    {
        return $this->hasMany('App\Models\PackageMealComponent');
    }


    public function customPackageMealComponents()
    {

        return $this->hasMany('App\Models\CustomerCustomPackageMealComponent');
    }

    public function supplierComponents()
    {

        return $this->hasMany('App\Models\SupplierComponent');
        
    }

    public function purchases()
    {

        return $this->hasMany('App\Models\PurchaseComponent');
    }

    public function excludes()
    {

        return $this->hasMany('App\Models\Exclude');
    }


}
