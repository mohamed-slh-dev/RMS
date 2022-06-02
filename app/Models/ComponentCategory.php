<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentCategory extends Model
{
    use HasFactory;


    protected $table = 'component_categories';


    protected $fillable = [
        'name', 'purchase_limit'
    ];


    // relationships
    public function components()
    {
        return $this->hasMany('App\Models\Component');

    }

}
