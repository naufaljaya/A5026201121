@extends('layout.bahagia')

@section('title', 'Detal Data')
@section('judulhalaman', 'Detal Data')

@section('konten')

	<a href="/kertashvs"> Kembali</a>

	<br/>
	<br/>

	@foreach($kertashvs as $p)
        <table>
            <tr>
                <td style="padding:10px;">Supplier</td>
                <td style="padding:10px;">{{ $p->pegawai_nama }}</td>
            </tr>
            <tr>
                <td style="padding:10px;">Merk Kertas HVS</td>
                <td style="padding:10px;">{{ $p->merkkertashvs }}</td>
            </tr>
            <tr>
                <td style="padding:10px;">Stock Kertas HVS</td>
                <td style="padding:10px;">{{ $p->stockkertashvs }}</td>
            </tr>
            <tr>
                <td style="padding:10px;">Tersedia</td>
                @if ($p->tersedia === "Y" )
                <td style="padding:10px;">Tersedia</td>
                @else
                <td style="padding:10px;">Kosong</td>
                @endif
            </tr>
        </table>
	@endforeach
@endsection
<!-- Credit to Muhammad Arif Nuriman -->
