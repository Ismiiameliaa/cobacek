<?php

$user = "Amel";
$password = "1234";

if(isset($_POST['submit'])){
    if ($user==$_POST['username'] && $password==$_POST['password']){
        $teks = "Selamat Datang di Welcome ";
    }else{
        $teks = "Username/Password Anda Salah!";
    }
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Dashboard</title>
</head>
<body>
    <h2>
        <?=$teks?>
    </h2>
</body>
</html>