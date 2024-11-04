<?php
session_start();
if(!empty($_SESSION['username'])){
    header('location:latihan10SESSIONDASH.php');
}

$akun = [
    [
        "username"=>"Amel",
        "password"=>"amel123"
    ],
    [
        "username"=>"Agus",
         "password"=>"agus123"
    ],
    [
        "username"=>"Rahman",
         "password"=>"rahman123"
    ],
    [
        "username"=>"Alim", 
         "password"=>"alim123"
    ]
    ];

$kondisi = 0; 
if(isset($_POST['submit'])){
    $kondisi = 1;
    foreach ($akun as $akn){
        if($akn['username']==$_POST['username']&&$akn['password']==$_POST['password']){
            header('location:latihan10SESSIONDASH.php');
            
            $_SESSION['username']=$akn['username'];
        }else{
            $kondisi = 2;
        }
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username"><br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit">
    </form>
    <?php if($kondisi==2) { ?>
        <p>
            "Username/Password Salah!"
        </p>
    <?php } ?>
</body>
</html>