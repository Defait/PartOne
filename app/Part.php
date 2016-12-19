<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    public function vendor()
    {
        return $this->hasOne(Vendor::class);
    }
    public function disks()
    {
        return $this->hasMay(Disk::class);
    }
}
