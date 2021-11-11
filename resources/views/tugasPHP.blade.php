<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pangkat</title>
</head>
<body>
    <form action="hasiltugasphp" method="post">
        @csrf
        <input type="text" name="absis" placeholder="Masukkan Absis">
        <br>
        <input type="text" name="pangkat" placeholder="Masukkan Pangkat">
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>
