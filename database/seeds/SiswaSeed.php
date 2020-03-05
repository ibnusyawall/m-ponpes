<?php

use Illuminate\Database\Seeder;

class SiswaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_siswa')->insert([
        	'id'     => 1,
        	'nama'   => 'Ibnu Syawal As-Salim',
        	'asal'   => 'Lakbok, Ciamis',
        	'umur'   => 17,
        	'status' => 'aktif'
        ]);
    }
}
