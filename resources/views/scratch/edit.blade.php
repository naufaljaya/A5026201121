<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/scratch"> Kembali</a>

	<br/>
	<br/>

	@foreach($scratch as $p)
	<form action="/scratch/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
		NRP <input type="number" required="required" name="NRP" value="{{ $p->NRP }}"> <br/>
		NAMA <input type="text" required="required" name="NAMA" value="{{ $p->NAMA }}"> <br/>
		JURUSAN <input type="text" required="required" name="JURUSAN" value="{{ $p->JURUSAN }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
