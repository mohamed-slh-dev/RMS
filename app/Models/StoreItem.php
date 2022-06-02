<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreItem extends Model
{
    use HasFactory;


    protected $table = 'store_items';


    protected $fillable = [

        'name',
        'cals',
        'price',
        'img',

    ];

    // relationship


    // -------------------------


    public function components()
    {
        return $this->hasMany('App\Models\StoreItemComponent', 'item_id');
    }

}
