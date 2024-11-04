<?php
session_start();
include "config.php";
if($koneksi->connect_error){
    die("Koneksi Gagal". $koneksi->connect_error);
}

$id = $_GET['id'];

$data = $koneksi->query("SELECT * FROM data_barang WHERE id='$id'");
// jika memiliki satu data array gunakan perintah di bawah ini
$dtb = mysqli_fetch_assoc($data);

if(isset($_POST['submit'])){
   
    $code = $_POST['code'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $koneksi->query("UPDATE data_barang SET code='$code',name='$name',price='$price',stock='$stock' WHERE id='$id')");

    header('location:readmysql.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="code" value="<?=$dtb['code']?>"><br>
        <input type="text" name="name" value="<?=$dtb['name']?>"><br>
        <input type="text" name="price" value="<?=$dtb['price']?>"><br>
        Tanggal Masuk <br>
        <input type="text" name="stock" value="<?=$dtb['stock']?>"><br>
        <input type="submit" name="submit" value="edit">
    </form>
</body>
</html>