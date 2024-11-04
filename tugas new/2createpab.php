<?php
 session_start();
 if(empty($_SESSION['email'])){
     header('location:1loginpab.php');
 }
$json_data = file_get_contents("guestpab.json");
$guestpab = json_decode($json_data,true);

if(isset($_POST["submit"])){
    $data_baru=[
        "name"=>$_POST["name"],
        "birth"=>$_POST["birth"],
        "email"=>$_POST["email"],
        "contact"=>$_POST["contact"],
        "action"=>$_POST["action"],
    ];

$guestpab[]=$data_baru;
$json_data_baru = json_encode($guestpab,JSON_PRETTY_PRINT);
file_put_contents("guestpab.json",$json_data_baru);
header("location:3readpab.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA BARU MEMBERSHIP</title>
    <style>
        form{
            width: 30%;
            border: 1px solid black;
            margin: auto;
            margin-top: 50px;
            padding: 30px;
            border-radius: 10px;
        }
        input{
            display: block;
            height: 30px;
            width: 100%;
            border: none;
            border-bottom: 1px solid black;
            margin-top: 10px;
        }
        .submit{
            margin-top: 20px;
            height: 30px;
            width: 40%;
            border-radius: 10px;
            background-color: pink;
        }
    </style>
</head>
<body>
    <center><h2>SILAKAN MASUKKAN DATA MEMBERSHIP</h2></center>
    <div class="button">
            <a href="6logoutpab.php" class="logout">Logout</a>
            <a href="3readpab.php" class="lihat">See More</a>
    </div>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Sesuai KTP" required><br>
        <input type="text" name="birth" placeholder="Tanggal lahir" required><br>
        <input type="text" name="email" placeholder="Email" required><br>
        <input type="text" name="contact" placeholder="Nomor Telepon" required><br>
        <button type="submit" name="submit">Save</button>
    </form>
</body>
</html>