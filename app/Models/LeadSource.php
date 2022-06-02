<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadSource extends Model {
    use HasFactory;

     protected $table = 'lead_sources';


    protected $fillable = [

        'name',
    ];

    // relations
    public function leads()
    {
        return $this->hasMany('App\Models\Lead');
    }
}
