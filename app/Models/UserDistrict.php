<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDistrict extends Model
{
    use HasFactory;

    protected $table = 'user_districts';


    protected $fillable = [

        'user_id',
        'district_id',

    ];



    // relationship

    public function district()
    {

        return $this->belongsTo('App\Models\District', 'district_id', 'id');
    }

    public function user()
    {

        return $this->belongsTo('App\Models\User');
    }
    
}
