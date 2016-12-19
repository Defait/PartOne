<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function disks()
    {
        return $this->hasMany(Disk::class);
    }
}
