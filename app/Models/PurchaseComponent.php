<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseComponent extends Model
{
    use HasFactory;

    protected $table = 'purchase_components';

    protected $fillable = [

        'purchase_id',
        'supplier_component_id',
        'quantity',
        'price',
    ];

  
    //relation

    public function component()
    {
        return $this->belongsTo('App\Models\SupplierComponent', 'supplier_component_id');
    }
}
