<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    protected $fillable = [
        'full_name',
        'contact',
        'source'
    ];

    public function followUp() {
        return $this->hasOne(FollowUp::class);
    }

}
