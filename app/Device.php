<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function disks()
    {
        return $this->hasMany(Disk::class);
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
    public function vendors()
    {
        return $this->hasOne(Vendor::class);
    }
}
