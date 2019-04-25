<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $fillable = [
        'id_lab',
        'status',
        'no_pc'
    ];
}
