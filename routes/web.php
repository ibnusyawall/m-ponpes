<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('Admin.index');
});*/

//Route::get('/', 'IndexController@index');

Route::group(['middleware'=>'auth'], function() {
	Route::get('/', 'IndexController@index');

	Route::get('iuran', 'IndexController@iuran');
	Route::post('iuran/_', 'IndexController@iuran_');
	Route::delete('iuran/hapus', 'IndexController@iuran_r');

	Route::get('santri/kehadiran', 'SiswaController@k_index');
	Route::post('santri/kehadiran/_', 'SiswaController@k_tambah');
	Route::delete('santri/kehadiran/hapus', 'SiswaController@k_hapus');

	Route::get('santri', 'SiswaController@index');
	Route::post('santri/tambah', 'SiswaController@tambah');
	Route::delete('santri/hapus', 'SiswaController@s_hapus');

	Route::get('pengajar', 'IndexController@p_index');
	Route::post('pengajar/tambah', 'IndexController@p_tambah');
	Route::delete('pengajar/hapus', 'IndexController@p_hapus');

});

Auth::routes();

Route::get('/setup', function(){
	\DB::table('users')->insert([
		'name'=>'admin',
		'email'=>'admin@stech.com',
		'password'=>bcrypt('admin'),
		'created_at'=>date('Y-m-d H-i-s'),
		'updated_at'=>date('Y-m-d H-i-s')
	]); return redirect('/');
});

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/keluar', function(){
	\Auth::logout();
	return redirect('login');
});