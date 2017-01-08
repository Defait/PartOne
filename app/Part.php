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
    public function cpus()
    {
        return $this->hasMany(Cpu::class);
    }
    public function ram()
    {
        return $this->hasMany(Ram::class);
    }
    public function motherboards()
    {
        return $this->hasMany(Motherboard::class);
    }
}
