<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Scratch</h3>

    <a href="/scratch/tambah"> + Tambah Data</a>
	<br/>
	<br/>

    <!-- Menyesuaikan tabel -->
	<table border="1">
		<tr>
			<th>NRP</th>
			<th>NAMA</th>
			<th>JURUSAN</th>
		</tr>
		@foreach($scratch as $p)
		<tr>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->NAMA }}</td>
			<td>{{ $p->JURUSAN }}</td>
            <td>
				<a href="/scratch/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/scratch/hapus/{{ $p->ID }}">Hapus</a>
			</td>
        </tr>
		@endforeach
	</table>


</body>
</html>
