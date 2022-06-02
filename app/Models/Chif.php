<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chif extends Model
{
    use HasFactory;

    protected $table = 'chifs';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role',
    ];

    public function meals()
    {
        return $this->hasMany('App\Models\CustomerMeal');
    }
}
