<?php
function rupiah($angka){

	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;

}
?>
@extends('layout.bahagia')

@section('title', 'EAS')
@section('judulhalaman', 'Detal Data')

@section('konten')

	<a href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan1 as $p)
        <table>
            <tr>
                <td style="padding:10px;">NIP</td>
                <td style="padding:10px;">{{ $p->NIP }}</td>
            </tr>
            <tr>
                <td style="padding:10px;">Nama</td>
                <td style="padding:10px;">{{ $p->Nama }}</td>
            </tr>
            <tr>
                <td style="padding:10px;">Pangkat</td>
                <td style="padding:10px;">{{ $p->Pangkat }}</td>
            </tr>
            <tr>
                <td style="padding:10px;">Gaji</td>
                <td style="padding:10px;"><?= rupiah( $p->Gaji )?></td>
            </tr>

        </table>
	@endforeach
@endsection
<!-- Credit to Muhammad Arif Nuriman -->
