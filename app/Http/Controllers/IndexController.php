<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\t_pengajar;
use App\t_siswa;
use App\t_iuran;

class IndexController extends Controller
{
    public function index() {
        $cs = t_siswa::with('nama')->count();
        $cp = t_pengajar::with('nama')->count();
        return view('Admin.index', compact('cs', 'cp'));
    }
    public function p_index(){
    	$data = t_pengajar::all();
    	return view('Admin.Pengajar.index', compact('data'));
    }
    public function p_tambah(Request $request) {
    	$this->validate($request, [
    		'nama'   => 'required',
    		'status' => 'required'
    	]);
    	\DB::table('t_pengajar')->insert([
    		'nama'   => $request->nama,
    		'status' => $request->status
    	]);
    	return redirect('/pengajar');
    }
    public function iuran(){
        $dataI = t_iuran::all();
        $dataS = t_siswa::all();
        return view('Admin.iuran.index', compact('dataS', 'dataI'));
    }
    public function iuran_(Request $request) {
        $this->validate($request, [
            'nama'   => 'required'
        ]);
        \DB::table('t_iuran')->insert([
            'nama'   => $request->nama,
            'jumlah' => 25000,
            'status' => $request->status
        ]);
        return redirect('/iuran');
    }
    public function iuran_r() {
        \DB::table('t_iuran')->truncate();
        return redirect('/iuran');
    }
    public function p_hapus() {
        \DB::table('t_pengajar')->truncate();
        return redirect('/pengajar');
    }
}
