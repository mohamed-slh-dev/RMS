<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierComponent extends Model
{
    use HasFactory;

    protected $table = 'supplier_components';

    protected $fillable = [

        'supplier_id',
        'component_id',
        'price',
    ];

    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier', 'supplier_id');
    }

    public function component()
    {
        return $this->belongsTo('App\Models\Component', 'component_id');

    }

    public function components()
    {
        return $this->hasMany('App\Models\SupplierComponent');

    }
}
