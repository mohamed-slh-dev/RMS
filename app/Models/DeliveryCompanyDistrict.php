<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryCompanyDistrict extends Model
{
    use HasFactory;

    protected $table = 'delivery_company_districts';


    protected $fillable = [

        'delivery_company_id',
        'district_id',

    ];

       // relationship

       public function district()
       {
   
           return $this->belongsTo('App\Models\District', 'district_id', 'id');
       }
   
       public function company()
       {
   
           return $this->belongsTo('App\Models\DeliveryCompany','delivery_company_id');
       }

}
