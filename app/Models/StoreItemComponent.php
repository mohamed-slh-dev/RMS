<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreItemComponent extends Model
{
    use HasFactory;


    protected $table = 'store_item_components';


    protected $fillable = [

        'item_id',
        'component_id',
        'unit',
        'quantity',

    ];




    // relationships
    public function item() {

        return $this->belongsTo('App\Models\StoreItem', 'item_id');
    }

    public function component() {

        return $this->belongsTo('App\Models\Component', 'component_id');
    }


}
