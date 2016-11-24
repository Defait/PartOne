<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function parts()
    {
        return $this->hasMany(Part::class);
    }

    public function vendor()
    {
        return $this->hasOne(Vendor::class);
    }

    public function disks()
    {
        return $this->hasMany(Disk::class);
    }
}
