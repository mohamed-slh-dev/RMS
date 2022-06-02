<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadFollowup extends Model
{
    use HasFactory;

    protected $table = 'lead_followups';


    protected $fillable = [

        'date',
        'next_follow_up',
        'note',
        'lead_id',
    ];


    // relationship
    public function lead()
    {
        return $this->belongsTo('App\Models\Lead', 'lead_id', 'id');
    }
}
