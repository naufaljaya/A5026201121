<?php
// cek data di $_POST
if (!(isset($_POST['pangkat']) && $_POST['absis'] )){
    // redirect
    header("Location: pangkatv2.php");
    exit;
}

$pangkat = number_format($_POST["pangkat"]);
$absis = number_format($_POST["absis"]);

function pangkat ($a, $p){
    if ($p == 0){
        return 1;
    }else{
        return $a * pangkat($a, $p - 1);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <h1>Hasilnya adalah = <?= pangkat($absis, $pangkat) ?> </h1>
</body>
</html>
