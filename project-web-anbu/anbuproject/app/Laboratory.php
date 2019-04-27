<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    //
    public function computers() {
        return $this->hasMany('App\Computer');
    }
}
