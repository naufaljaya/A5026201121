@extends('layout.bahagia')

@section('title', 'Detal Data Pegawai')
@section('judulhalaman', 'Detal Pegawai')

@section('konten')

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
        <table>
            <tr>
                <td style="padding:10px;">Nama</td>
                <td style="padding:10px;">{{ $p->pegawai_nama }}</td>
            </tr>
            <tr>
                <td style="padding:10px;">Jabatan</td>
                <td style="padding:10px;">{{ $p->pegawai_jabatan }}</td>
            </tr>
            <tr>
                <td style="padding:10px;">Umur</td>
                <td style="padding:10px;">{{ $p->pegawai_umur }}</td>
            </tr>
            <tr>
                <td style="padding:10px;">Alamant</td>
                <td style="padding:10px;">{{ $p->pegawai_alamat }}</td>
            </tr>
        </table>
	@endforeach
@endsection
<!-- Credit to Muhammad Arif Nuriman -->
