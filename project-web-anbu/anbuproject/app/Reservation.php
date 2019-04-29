<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'nama',
        'nrp',
        'email',
        'id_lab',
        'no_pc',
        'no_hp',
        'proposal',
        'status',
        'tgl_pinjam'
    ];
	
    public function lab() {
        return $this->belongsTo('App\Laboratory','id_lab','id');
    }   

}
