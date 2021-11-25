<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PendapatanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pendapatan
    	$pendapatan = DB::table('pendapatan')->get();

    	// mengirim data pegawai ke view index
    	return view('pendapatan.index',['pendapatan' => $pendapatan]);
    }
    public function tambah()
    {

	// memanggil view tambah
	return view('pendapatan.tambah');

    }
    // method untuk insert data ke table pendapatan
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('pendapatan')->insert([
		'IDPegawai' => $request->IDPegawai,
		'Bulan' => $request->Bulan,
		'Tahun' => $request->Tahun,
		'Gaji' => $request->Gaji,
        'Tunjangan' => $request->Tunjangan
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pendapatan');

    }
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pendapatan = DB::table('pendapatan')->where('ID', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('pendapatan.edit', ['pendapatan' => $pendapatan]);
    }
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pendapatan')->where('ID', $request->ID)->update([
            'IDPegawai' => $request->IDPegawai,
		    'Bulan' => $request->Bulan,
		    'Tahun' => $request->Tahun,
		    'Gaji' => $request->Gaji,
            'Tunjangan' => $request->Tunjangan
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pendapatan');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pendapatan')->where('ID',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/pendapatan');
    }
}
