<?php

use Illuminate\Database\Seeder;
use App\
class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('users')->insert([
    		'name'=>'admin2',
    		'email'=>'admin@stech.com',
    		'password'=>bcrypt('admin'),
    		'created_at'=>date('Y-m-d H-i-s'),
    		'updated_at'=>date('Y-m-d H-i-s')
    	]);
    }
}
