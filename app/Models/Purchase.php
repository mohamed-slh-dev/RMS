<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchases';

    protected $fillable = [

        'supplier_id',
        'note',
        'action_note',
        'price',
        'status',
        'expected_date',
        'received_date',
        'reference',
        'po'
    ];

   

    //relations


    public function quantity()
    {
        return $this->hasMany('App\Models\PurchaseComponent');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier');
    }
}
