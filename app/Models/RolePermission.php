<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    use HasFactory;

    protected $table = 'role_permissions';


    protected $fillable = [

        'modulename',
        'access',
        'role_id',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
}
