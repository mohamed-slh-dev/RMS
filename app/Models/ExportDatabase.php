<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExportDatabase extends Model
{
    use HasFactory;

    protected $table = 'export_databases';


    protected $fillable = [
        'name',  
    ];

}
