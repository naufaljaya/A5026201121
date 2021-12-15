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

Route::get('/', function () {
    return view('welcome');
});
Route::get('praktikum2', function () {
    return view('praktikum2');
});
Route::get('tugas4', function () {
    return view('tugas4');
});

Route::get('isiannama', "ViewController@showForm");

Route::post('greetings', "ViewController@resultGreetings");

Route::get('uts', "ViewController@showUTS");

Route::get('tugasphppangkat', "ViewController@showTugasPHP");

Route::post('hasiltugasphp', "ViewController@resultTugasPHP");

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD
Route::get('/pegawai1','Pegawai1Controller@index');

// learn from scratch
Route::get('/scratch','ScratchController@index');
Route::get('/scratch/tambah','ScratchController@tambah');
Route::post('/scratch/store','ScratchController@store');
Route::get('/scratch/edit/{id}','ScratchController@edit');
Route::post('/scratch/update','ScratchController@update');
Route::get('/scratch/hapus/{id}','ScratchController@hapus');

//route kertashvs
Route::get('/kertashvs','KertashvsController@index');
Route::get('/kertashvs/tambah','KertashvsController@tambah');
Route::post('/kertashvs/store','KertashvsController@store');
Route::get('/kertashvs/edit/{id}','KertashvsController@edit');
Route::post('/kertashvs/update','KertashvsController@update');
Route::get('/kertashvs/hapus/{id}','KertashvsController@hapus');
Route::get('/kertashvs/cari','KertashvsController@cari');
Route::get('/kertashvs/view/{id}','KertashvsController@detail');

//route karyawan1
Route::get('/karyawan1','Karyawan1Controller@index');
Route::get('/karyawan1/tambah','Karyawan1Controller@tambah');
Route::post('/karyawan1/store','Karyawan1Controller@store');
Route::get('/karyawan1/edit/{id}','Karyawan1Controller@edit');
Route::post('/karyawan1/update','Karyawan1Controller@update');
Route::get('/karyawan1/hapus/{id}','Karyawan1Controller@hapus');
Route::get('/karyawan1/view/{id}','Karyawan1Controller@detail');
