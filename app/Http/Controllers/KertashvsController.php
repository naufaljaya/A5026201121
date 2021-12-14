<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KertashvsController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	// $kertashvs = DB::table('kertashvs')
        // ->orderBy('merkkertashvs', 'asc')
        // ->paginate(1);

        $kertashvs = DB::table('kertashvs')
	       ->join('pegawai', 'kertashvs.kodekertashvs', '=', 'pegawai.pegawai_id')
	       ->select('kertashvs.*', 'pegawai.pegawai_nama')
	       ->paginate(2) ;

    	// mengirim data pegawai ke view index
    	return view('kertashvs.index',['kertashvs' => $kertashvs]);


      // (nama tabel).index karena index berada didalam folder (nama tabel)

    }
    public function tambah()
    {
	// memanggil view tambah
	return view('kertashvs.tambah');

    }
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('kertashvs')->insert([
		'merkkertashvs' => $request->merkkertashvs,
		'stockkertashvs' => $request->stockkertashvs,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/kertashvs');

    }
    public function edit($id)
    {
    // mengambil data pegawai berdasarkan id yang dipilih
    $kertashvs = DB::table('kertashvs')->where('kodekertashvs',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('kertashvs.edit',['kertashvs' => $kertashvs]);

    }
    public function update(Request $request)
{
    // update data pegawai
    DB::table('kertashvs')->where('kodekertashvs',$request->kodekertashvs)->update([
        'merkkertashvs' => $request->merkkertashvs,
        'stockkertashvs' => $request->stockkertashvs,
        'tersedia' => $request->tersedia
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/kertashvs');
}
public function hapus($id)
{
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('kertashvs')->where('kodekertashvs',$id)->delete();

    // alihkan halaman ke halaman pegawai
    return redirect('/kertashvs');
}
public function cari(Request $request)
{
    // menangkap data pencarian
    $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
    $kertashvs = DB::table('kertashvs')
    ->join('pegawai', 'kertashvs.kodekertashvs', '=', 'pegawai.pegawai_id')
	->select('kertashvs.*', 'pegawai.pegawai_nama')
    ->where('pegawai_nama','like',"%".$cari."%")
    ->orWhere('merkkertashvs','like', "%" . $cari . "%")
    ->paginate();


        // mengirim data pegawai ke view index
    return view('kertashvs.index',['kertashvs' => $kertashvs]);

}
// method untuk melihat detail data pegawai
public function detail($id)
{
    // mengambil data pegawai berdasarkan id yang dipilih
    $kertashvs = DB::table('kertashvs')
    ->join('pegawai', 'kertashvs.kodekertashvs', '=', 'pegawai.pegawai_id')
	->select('kertashvs.*', 'pegawai.pegawai_nama')
    ->where('kodekertashvs', $id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('kertashvs.detail', ['kertashvs' => $kertashvs]);
}



}
