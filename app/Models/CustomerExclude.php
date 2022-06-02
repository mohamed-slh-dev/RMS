<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerExclude extends Model
{
    use HasFactory;

    protected $table = 'customer_excludes';


    protected $fillable = [

        'customer_id',
        'component_id',

    ];


    // relationship


    public function customer()
    {

        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }


    public function component()
    {

        return $this->belongsTo('App\Models\Component', 'component_id');
    }

}
