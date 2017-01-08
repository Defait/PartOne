<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disk extends Model
{
    public function device()
    {
        return $this->hasOne(Device::class);
    }

    public function part()
    {
        return $this->hasOne(Part::class);
    }
}
