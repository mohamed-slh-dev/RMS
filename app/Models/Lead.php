<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;


    protected $table = 'leads';


    protected $fillable = [

        'name',
        'phone',
        'email',
        'user_id',
        'city_id',
        'district_id',
        'address',
        'follow_up',
        'status',
        'package_id', 
        'source_id',
        'revenue',
    ];


    // relationship
    public function city()
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    }

    public function source()
    {
        return $this->belongsTo('App\Models\LeadSource', 'source_id');
    }

    public function package()
    {
        return $this->belongsTo('App\Models\Package', 'package_id');
    }

    public function followups()
    {
        return $this->hasMany('App\Models\LeadFollowup');
    }



    public function district()
    {
        return $this->belongsTo('App\Models\District', 'district_id');
    }


    public function manager()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }


}
