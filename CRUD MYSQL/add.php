<?php
session_start();
include "config.php";
if(isset($_POST['submit'])){
   
    $code = $_POST['code'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $koneksi->query("INSERT INTO data_barang VALUES('','$code','$name','$price','$stock')");

    header('location:readmysql.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Data</title>
</head>
<body>
    <form action="view.php" method="post">
        <input type="text" name="code" placeholder="put a code" required><br>
        <input type="text" name="nama" placeholder="put a name" required><br>
        <input type="number" name="price" placeholder="put the price" required><br>
        <input type="number" name="stock" required><br>
        <input type="submit" name="submit" value="Add">
    </form>
</body>
</html>