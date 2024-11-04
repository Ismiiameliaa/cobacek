<?php
    session_start();
    include "config.php";
    if (empty($_SESSION['username'])) {
        header('location:view.php');
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
        Selamat Datang Karyawan
        <?=$_SESSION['username']?><br>
        <a href="logoutmysql.php">LOGOUT</a>
    </h2>
</body>
</html>