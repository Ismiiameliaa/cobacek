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

$kondisi = 0; 
if(isset($_POST['submit'])){
    $kondisi = 1;
    foreach ($akun as $akn){
        if($akn['nama']==$_POST['username'] && $akn['password']==$_POST['password']){
            header('location:latihan9dashboard.php');
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