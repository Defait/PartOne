<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    public function devices()
    {
        return $this->hasOne(Device::class);
    }
}
