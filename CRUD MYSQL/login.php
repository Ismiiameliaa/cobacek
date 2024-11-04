<?php
session_start();
if(!empty($_SESSION['username'])){
    header('location:add.php');
    exit();
}

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "data_karyawan";

$koneksi = new mysqli($host,$user,$pass,$dbname);

if($koneksi->connect_error){
    die("Koneksi Gagal". $koneksi->connect_error);
}

// echo "Koneksi Berhasil";

$data = $koneksi->query("SELECT * FROM staff");
$data_karyawan = $data->fetch_all(MYSQLI_ASSOC);

$kondisi = 0;
if(isset($_POST['submit'])){
    $kondisi = 1;
    foreach ($data_karyawan as $dtk){
        if($dtk['username']==$_POST['username']&&$dtk['password']==$_POST['password']){
            header('location:add.php');
            $_SESSION['username']=$dtk['username'];
        }else{
            $kondisi = 2;
        }
    }
}
// var_dump ($data_karyawan);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Karyawan</h2>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Masukkan Username" required><br>
        <input type="password" name="password" placeholder="Masukkan Password" required><br>
        <input type="submit" name="submit" value="Login">
        
    <?php if($kondisi==2) { ?>
    <p>"Username/Password Salah!"</p>
    <?php } ?>
    </form>
</body>
</html>
