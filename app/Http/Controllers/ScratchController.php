<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ScratchController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$scratch = DB::table('scratch')->get();

    	// mengirim data pegawai ke view index
    	return view('scratch.index',['scratch' => $scratch]);

    }
    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

	// memanggil view tambah
	return view('scratch.tambah');

    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('scratch')->insert([
		'NRP' => $request->NRP,
		'NAMA' => $request->NAMA,
		'JURUSAN' => $request->JURUSAN
		]);
	// alihkan halaman ke halaman pegawai
	return redirect('/scratch');

    }
    // method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$scratch = DB::table('scratch')->where('ID',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('scratch.edit',['scratch' => $scratch]);

}
// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('scratch')->where('ID',$request->ID)->update([
		'NRP' => $request->NRP,
		'NAMA' => $request->NAMA,
		'JURUSAN' => $request->JURUSAN
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/scratch');
}
// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('scratch')->where('ID',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/scratch');
}
}
