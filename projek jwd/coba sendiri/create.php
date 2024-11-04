<?php
session_start();
if(empty($_SESSION['username'])){
    header('location:read.php');
}

$json_data = file_get_contents ("data.json");
$data = json_decode ($json_data, true);

date_default_timezone_set('Asia/Makassar');
$waktu = date ('Y-m-d H:i A');

if(isset($_POST['submit'])){
    $data_baru=[
        "nama" => $_POST["nama"],
        "alamat" => $_POST["alamat"],
        "telepon" => $_POST["telepon"]
    ];

    $data_baru
}