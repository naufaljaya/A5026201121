@extends('layout.bahagia')

@section('title', 'Menambah Data Kertas hvs')
@section('judulhalaman', 'Tambah Data')

@section('konten')

	<a href="/kertashvs"> Kembali</a>

	<br/>
	<br/>

	<form action="/kertashvs/store" method="post">
		{{ csrf_field() }}
        <div>
            Merk Kertas HVS <br> <input type="text" name="merkkertashvs" required="required"> <br/>
        </div>
        <div>
            Stock Kertas HVS <br> <input type="number" name="stockkertashvs" required="required"> <br/>
        </div>
        <div>
            Ketersediaan <br/>
            <input type="radio" id="izin" name="tersedia" value="Y">
            <label for="izin">Tersedia</label><br>
            <input type="radio" id="sakit" name="tersedia" value="N" checked="checked">
            <label for="sakit">Kosong</label><br>
        </div>
        <div>
            <input type="submit" value="Simpan Data">
        </div>
	</form>
@endsection
