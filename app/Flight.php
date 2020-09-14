<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'name',
        'duration'
    ];

    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }
}
