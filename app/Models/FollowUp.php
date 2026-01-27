<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FollowUp extends Model
{
    protected $fillable = [
        'person_id',
        'status',
        'note',
        'followed_up_by',
        'followed_up_at'
    ];
   
    # For Follow-Up Enumeration
    protected $casts = [
        'status' => \App\Enums\Status::class,
    ];

    public function person() {
        return $this->belongsTo(Person::class);
    }    
}
