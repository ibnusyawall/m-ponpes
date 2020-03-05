<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_siswa extends Model
{
	protected $table = 't_siswa';
	protected $fillable = [
		'id', 'nama', 'asal', 'umur', 'status'
	];
}
