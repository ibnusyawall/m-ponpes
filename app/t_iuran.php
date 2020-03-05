<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_iuran extends Model
{
    protected $table = 't_iuran';
    protected $fillable = [
    	'nama', 'jumlah', 'status', 'created_at', 'updated_at'
    ];
}
