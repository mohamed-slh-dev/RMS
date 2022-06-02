<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';


    protected $fillable = [

        'name',
        'phone',
        'email',
        'address',
    ];



    // reverse

    public function components()
    {
        return $this->hasMany('App\Models\SupplierComponent');
    }

    public function purchases()
    {
        return $this->hasMany('App\Models\PurchaseComponent');
    }

}
