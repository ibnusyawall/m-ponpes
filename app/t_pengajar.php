<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_pengajar extends Model
{
    protected $table = 't_pengajar';
    protected $fillable = [
    	'id', 'nama', 'status', 'created_at', 'updated_at'
    ];
}
