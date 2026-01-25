<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FollowUp extends Model
{
    # For Follow-Up Enumeration
    protected $casts = [
        'status' => \App\Enums\Status::class,
    ];

    public function person() {
        return $this->belongsTo(Person::class);
    }    
}
