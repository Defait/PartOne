<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function parts()
    {
        return $this->hasMany(Part::class);
    }
}
