<?php

session_start();
if(empty($_SESSION['email'])){
    header('location:1loginpab.php');
}

$indeks=$_GET['indeks'];
$json_data = file_get_contents('guestpab.json');
$guestpab = json_decode($json_data,true);

if(isset($_POST["submit"])){
    $update_data=[
        "name"=>$_POST["name"],
        "birth"=>$_POST["birth"],
        "email"=>$_POST["email"],
        "contact"=>$_POST["contact"],
    ];

$guestpab[$indeks]=$data_update;
$json_update = json_encode($guestpab,JSON_PRETTY_PRINT);
file_put_contents('guestpab.json',$json_update_data);
header('location:3readpab.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATA</title>
    
</head>
<body>
    <div class="container">
        <h2>UPDATE DATA</h2>
        <div class="button">
            <a href="6logoutpab.php" class="logout">Logout</a>
            <a href="3readpab.php" class="kembali">Back</a>
        </div>
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="">Full Name</label></td>
                    <td>:</td>
                    <td><input type="text" name="name" value="<?=$guestpab[$indeks]["name"]?>" required></td>
                </tr>
                <tr>
                    <td><label for="">Birth</label></td>
                    <td>:</td>
                    <td><input type="text" name="birth" value="<?=$guestpab[$indeks]["birth"]?>"required></td>
                </tr>
                <tr>
                    <td><label for="">Email</label></td>
                    <td>:</td>
                    <td><input type="text" name="email" value="<?=$guestpab[$indeks]["email"]?>" required></td>
                </tr>
                <tr>
                    <td><label for="">Contact</label></td>
                    <td>:</td>
                    <td><input type="text" name="contact" value="<?=$guestpab[$indeks]["contact"]?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="submit">Save</button></td>
                </tr>
            </table> 
        </form>
    </div>
</body>
</html>