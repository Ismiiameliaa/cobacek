<?php

$nama = $_GET["nama"];
$jabatan = $_GET["jabatan"];
$email = $_GET["email"];
$gambar = $_GET["gambar"];
$umur = $_GET["umur"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRY OUT2</title>
</head>
<body>
    <h2>DATA KARYAWAN</h2>
    <img src="./assets/<?=$gambar?>" width="150px"><br>
    <?=$nama?> <br>
    <?=$jabatan?> <br>
    <?=$email?> <br>
    <?=$umur?> <br>
</body>
</html>