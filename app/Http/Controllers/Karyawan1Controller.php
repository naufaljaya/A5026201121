<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Karyawan1Controller extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan1
    	$karyawan1 = DB::table('karyawan1')
        ->orderBy('Nama', 'asc')
        ->paginate(1);

    	// mengirim data pegawai ke view index
    	return view('karyawan1.index',['karyawan1' => $karyawan1]);


      // (nama tabel).index karena index berada didalam folder (nama tabel)

    }
    public function tambah()
    {
	// memanggil view tambah
	return view('karyawan1.tambah');

    }
    public function store(Request $request)
    {
	// insert data ke table karyawan1
	DB::table('karyawan1')->insert([
		'NIP' => $request->NIP,
		'Nama' => $request->Nama,
		'Pangkat' => $request->Pangkat,
        'Gaji' => $request->Gaji
	]);
	// alihkan halaman ke halaman karyawan1
	return redirect('/karyawan1');

    }
    public function edit($id)
    {
    // mengambil data karyawan1 berdasarkan id yang dipilih
    $karyawan1 = DB::table('karyawan1')->where('NIP',$id)->get();
    // passing data karyawan1 yang didapat ke view edit.blade.php
    return view('karyawan1.edit',['karyawan1' => $karyawan1]);

    }
    public function update(Request $request)
{
    // update data pegawai
    DB::table('karyawan1')->where('NIP',$request->NIP)->update([
        'NIP' => $request->NIP,
        'Nama' => $request->Nama,
        'Pangkat' => $request->Pangkat,
        'Gaji' => $request->Gaji
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/karyawan1');
}
public function hapus($id)
{
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('karyawan1')->where('NIP',$id)->delete();

    // alihkan halaman ke halaman pegawai
    return redirect('/karyawan1');
}

// method untuk melihat detail data pegawai
public function detail($id)
{
    // mengambil data pegawai berdasarkan id yang dipilih
    $karyawan1 = DB::table('karyawan1')
    ->where('NIP', $id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('karyawan1.detail', ['karyawan1' => $karyawan1]);
}


}
