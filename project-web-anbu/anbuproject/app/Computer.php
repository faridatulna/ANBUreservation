<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
	protected $primaryKey = 'id';
	public $incrementing = true;

    protected $fillable = [
    	'id',
        'id_lab',
        'status',
        'no_pc'
    ];

    public function laboratory() {
        return $this->belongsTo('App\Computer');
    }    
}
