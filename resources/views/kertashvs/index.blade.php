@extends('layout.bahagia')

@section('title', 'Data kertashvs')
@section('judulhalaman', 'Data kertashvs')

@section('konten')

	<a href="/kertashvs/tambah"> + Tambah Data Baru</a>

	<br/>
	<br/>
    <div class="container" align="center">
		<form action="/kertashvs/cari" method="GET">
			<input type="text" class="form-control" name="cari" placeholder="Cari Kertas berdasarkan merk kertas hvs .." value="{{ old('cari') }}">
			<br>
            <input type="submit" class="btn btn-default" value="CARI">
		</form>
	</div>
	<table>
        <thead>
            <tr>
                <th>Supplier</th>
                <th>Merk Kertas hvs</th>
                <th>Stock Kertas hvs</th>
                <th>Ketersediaan</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kertashvs as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->merkkertashvs }}</td>
                <td>{{ $p->stockkertashvs }}</td>
                @if ($p->tersedia === "Y" )
                <td>Tersedia</td>
                @else
                <td>Kosong</td>
                @endif
                <td>
                    <a href="/kertashvs/edit/{{ $p->kodekertashvs }}">Edit</a>
                    |
                    <a href="/kertashvs/hapus/{{ $p->kodekertashvs }}">Hapus</a>
                    |
                    <a href="/kertashvs/view/{{ $p->kodekertashvs }}">View Detail</a>
                </td>
            </tr>
            @endforeach

        </tbody>
	</table>
    {{ $kertashvs->links() }}

@endsection
<!-- Credit to Muhammad Arif Nuriman -->
