<?php
$akun = [
    [
        "nama"=>"Amel",
        "password"=>"amel123"
    ],
    [
        "nama"=>"Agus",
         "password"=>"agus123"
    ],
    [
        "nama"=>"Rahman",
         "password"=>"rahman123"
    ],
    [
        "nama"=>"Alim", 
         "password"=>"alim123"
    ]
    ];

$teks = "Username/Password Yang Anda Masukkan Salah!";
if(isset($_POST['submit'])){
    foreach ($akun as $akn){
        if($akn['nama']==$_POST['username'] && $akn['password']==$_POST['password']){
            $teks = "Selamat Datang di Penginapan Amelia ";
        }
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