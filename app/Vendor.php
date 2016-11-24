<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function devices()
    {
        return $this->hasMany(Device::class);
    }

    public function parts()
    {
        return $this->hasMany(Part::class);
    }
}
