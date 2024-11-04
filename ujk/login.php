<?php
session_start();
if (!empty($_SESSION['username'])) {
    header('location: create.php');
    exit();
}

$akun = [
    [
        "username"=>"amel",
        "password"=>"123"
    ],
];

$kondisi = 0;
if (isset($_POST["submit"])) {
    $kondisi = 1;
    foreach ($akun as $ak) {
        if ($ak["username"]==$_POST["username"]&&$ak["password"]==$_POST["password"]) {
        header("location: create.php");
        $_SESSION["username"]=$ak["username"];
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
    <style>
    body{
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background: #f0f0f0;
        justify-content: center; 
        align-items: center;
    }
    .container{
        width: 900px; /* Fixed width */
        margin: auto; /* Center container horizontally */
        background: antiquewhite;
    }
    .header{
        background: linear-gradient(to right, #80a6a6, #8070b8);
        color: white;
        text-align: center;
        padding: 30px;
    }
    img{
        width: 130px;
        height: 130px;
        padding-left: 50px;
        position: relative;
        float: left;
        margin-left: 50px;
    }
    h1{
        margin: 0;
        color: white;
        margin-right: 50px;
        font-size: 25px;
    }
    p{
        color: white;
        text-align: center;
        margin-right: 50px;
    }
    .form-container form{
        background-color: antiquewhite;
        padding: 50px;
        margin-bottom: 150px;
        margin-top: 50px;
    }
    label{
        color: navy;
        font-weight: bold;
        margin-left: 250px;
    }
    input {
        margin: 10px 0;
        color: navy;
        padding: 10px;
        width: 30%;
        background: white;
        border: none;
        margin-right: 100px;
    }
    button {
        padding: 10px 15px;
        background: green;
        color: white;
        border: none;
        cursor: pointer;
        margin-left: 530px;
    }
    button:hover {
        background: #707070;
    }
    footer{
        background: linear-gradient(to right, #80a6a6, #8070b8);
        color: white; 
        padding: 20px 0; 
        position: relative; 
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="./logo.webp" alt="150px">
            <h1>APLIKASI BUKU TAMU BPVP BANTAENG</h1>
            <p>BPVP Bantaeng bertekad menjadi lembaga pelatihan<br>keterampilan yang mandiri dan tangguh dalam program<br>pelatihan yang dapat memenuhi kebutuhan pasar tenaga kerja</p>
        </div>

        <div class="form-container">
        <form action="" method="post">
            <div class="input-box">
                <label for="username">Username</label>
                <input type="username" id="username" name="username" required>
            </div>
            <div class="input-box">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"required>
            </div>
            <button type="submit" name="submit">Login</button>
        <?php if($kondisi==2) { ?>
            <script>alert("check again your account")</script>
        <?php } ?>
        </form>

        <footer></footer>
    </div>
</body>
</html>