<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/scratch"> Kembali</a>

	<br/>
	<br/>

	<form action="/scratch/store" method="post">
		{{ csrf_field() }}
		NRP <input type="number" name="NRP" required="required"> <br/>
		NAMA <input type="text" name="NAMA" required="required"> <br/>
		JURUSAN <input type="text" name="JURUSAN" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
