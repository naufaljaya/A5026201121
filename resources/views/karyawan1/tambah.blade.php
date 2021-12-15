@extends('layout.bahagia')

@section('title', 'EAS')
@section('judulhalaman', 'Tambah Data')

@section('konten')

	<a href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan1/store" method="post">
		{{ csrf_field() }}
        <div>
            NIP (9 Karakter) <br> <input type="text" name="NIP" required="required"> <br/>
        </div>
        <div>
            Nama <br> <input type="text" name="Nama" required="required"> <br/>
        </div>
        <div>
            Pangkat (5 Karakter)<br> <input type="text" name="Pangkat" required="required"> <br/>
        </div>
        <div>
            Gaji <br> <input type="number" name="Gaji" required="required"> <br/>
        </div>

        <div>
            <input type="submit" value="Simpan Data">
        </div>
	</form>
@endsection
