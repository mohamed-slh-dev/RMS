<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SauceComponent extends Model
{
    use HasFactory;

    protected $table = 'sauce_components';


    protected $fillable = [

        'sauce_id',
        'component_id',
        'quantity',

    ];




    // relationships
    public function sauce()
    {
        return $this->belongsTo('App\Models\Sauce');
    }

    public function component()
    {
        return $this->belongsTo('App\Models\Component');

    }

}
