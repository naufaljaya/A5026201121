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
