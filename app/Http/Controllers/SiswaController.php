<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\t_siswa;
use App\t_kehadiran;

class SiswaController extends Controller
{
	public function index() {
		$data = t_siswa::all();
		return view('Admin.Siswa.index', compact('data'));
	}
	public function tambah(Request $request) {
		$this->validate($request, [
			'nama'   => 'required',
			'umur'   => 'required',
			'status' => 'required',
			'alamat' => 'required'
		]);
		/*$santri = new t_siswa;
		$santri->nama  = $request->nama;
		$santri->umur  = $request->umur;
		$santri->status= $request->status;
		$santri->asal  = $request->alamat;
		$santri->save();*/
		\DB::table('t_siswa')->insert([
			'nama'  => $request->nama,
			'umur'  => $request->umur,
			'status'=> $request->status,
			'asal'=> $request->alamat
		]);

		return redirect('/santri');
	}
	public function k_index(){
		$dataTgl = t_kehadiran::all();
		$dataS   = t_siswa::all();
		//$sakit = t_kehadiran::find($dataS->nama)->where('sakit')->count();
		//$alfa  = t_kehadiran::find($dataS->nama)->where('alfa')->count();
		//$izin  = t_kehadiran::find($dataS->nama)->where('izin')->count();
		return view('Admin.Siswa.kehadiran.index', compact('dataS', 'dataTgl'));
	}
	public function k_tambah(Request $request) {
		$this->validate($request, [
			'nama'       => 'required',
			'keterangan' => 'required'
		]);
		\DB::table('t_kehadiran')->insert([
			'nama'      => $request->nama,
			'keterangan'=> $request->keterangan
		]);
		return redirect('/santri/kehadiran');
	}

	public function s_hapus() {
        \DB::table('t_siswa')->truncate();
        return redirect('/santri');
    }
    public function k_hapus() {
        \DB::table('t_kehadiran')->truncate();
        return redirect('/santri/kehadiran');
    }

}
