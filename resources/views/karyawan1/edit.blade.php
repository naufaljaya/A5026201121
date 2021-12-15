@extends('layout.bahagia')

@section('title', 'EAS')
@section('judulhalaman', 'Edit Data')

@section('konten')

	<a href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan1 as $p)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}
        <div>
            NIP <br> <input type="text" required="required" name="NIP" value="{{ $p->NIP }}"> <br/>
        </div>
        <div>
            Nama <br> <input type="text" required="required" name="Nama" value="{{ $p->Nama }}"> <br/>
        </div>
        <div>
            Pangkat <br> <input type="text" required="required" name="Pangkat" value="{{ $p->Pangkat }}"> <br/>
        </div>
        <div>
            Gaji <br> <input type="number" required="required" name="Gaji" value="{{ $p->Gaji }}"> <br/>
        </div>
        <div>
            <input type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach
@endsection
<!-- Credit to Muhammad Arif Nuriman -->
