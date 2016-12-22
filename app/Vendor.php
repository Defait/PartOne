<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function devices()
    {
        return $this->belongsToMany(Device::class);
    }

    public function parts()
    {
        return $this->hasMany(Part::class);
    }
}
