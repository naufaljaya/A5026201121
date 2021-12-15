<?php
function rupiah($angka){

	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;

}
?>

@extends('layout.bahagia')

@section('title', 'EAS')
@section('judulhalaman', 'EAS')

@section('konten')

	<a href="/karyawan1/tambah"> + Tambah Data Baru</a>

	<br/>
	<br/>
	<table>
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Pangkat</th>
                <th>Gaji</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($karyawan1 as $p)
            <tr>
                <td>{{ $p->NIP }}</td>
                <td>{{ $p->Nama }}</td>
                <td>{{ $p->Pangkat }}</td>
                <td><?= rupiah( $p->Gaji )?></td>
                <td>
                    <a href="/karyawan1/edit/{{ $p->NIP }}">Edit</a>
                    |
                    <a href="/karyawan1/hapus/{{ $p->NIP }}">Hapus</a>
                    |
                    <a href="/karyawan1/view/{{ $p->NIP }}">View Detail</a>
                </td>
            </tr>
            @endforeach

        </tbody>
	</table>
    {{ $karyawan1->links() }}

@endsection
