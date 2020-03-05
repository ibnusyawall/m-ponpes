<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_kehadiran extends Model
{
    protected $table = 't_kehadiran';
    protected $fillable = [
    	'nama', 'alfa', 'izin', 'sakit'
    ];
}
