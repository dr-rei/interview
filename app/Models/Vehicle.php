<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }
}
