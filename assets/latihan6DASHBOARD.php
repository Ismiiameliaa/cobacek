<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $teks = "Selamat Datang di Welcome ".$username;
}else{
    $teks = "Maaf Anda Belum Login Cess";
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