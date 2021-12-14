@extends('layout.bahagia')

@section('title', 'CRUD Tabel Pegawai')
@section('judulhalaman', 'Tabel Data Pegawai')

@section('konten')

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
    <div class="container" align="center">
		<form action="/pegawai/cari" method="GET">
			<input type="text" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
			<input type="submit" class="btn btn-default" value="CARI">
		</form>
	</div>
	<table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                    |
                    <a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
                </td>
            </tr>
            @endforeach

        </tbody>
	</table>
    {{ $pegawai->links() }}
@endsection
<!-- Credit to Muhammad Arif Nuriman -->
