@extends('layout.bahagia')

@section('title', 'Mengedit Data Kertas hvs')
@section('judulhalaman', 'Edit Data')

@section('konten')

	<a href="/kertashvs"> Kembali</a>

	<br/>
	<br/>

	@foreach($kertashvs as $p)
	<form action="/kertashvs/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodekertashvs" value="{{ $p->kodekertashvs }}"> <br/>
        <div>
            Merk Kertas HVS <br> <input type="text" required="required" name="merkkertashvs" value="{{ $p->merkkertashvs }}"> <br/>
        </div>
        <div>
            stockkertashvs <br> <input type="number" required="required" name="stockkertashvs" value="{{ $p->stockkertashvs }}"> <br/>
        </div>
        <div>
            Status <br />
            <input type="radio" id="html" name="tersedia" value="Y" @if ($p->tersedia === "Y" ) checked="checked" @endif>
            <label for="html">Tersedia</label><br>
            <input type="radio" id="css" name="tersedia" value="N"  @if ($p->tersedia === "N" ) checked="checked" @endif>
            <label for="css">Kosong</label><br>
        </div>
        <div>
            <input type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach
@endsection
<!-- Credit to Muhammad Arif Nuriman -->
