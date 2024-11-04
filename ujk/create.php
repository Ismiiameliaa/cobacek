<?php
session_start();
if(empty($_SESSION["username"])){
    header("read.php");
}

$json_data = file_get_contents("datatamu.json");
$datatamu = json_decode($json_data, true);

if(isset($_POST["submit"])){
    $data_baru=[
        "nama" => $_POST["nama"],
        "nik" => $_POST["nik"],
        "asal" => $_POST["asal"],
        "bidang" => $_POST["bidang"],
        "perlu"=> $_POST["perlu"],
    ];
    $datatamu[] = $data_baru;
    $json_data_baru=json_encode($datatamu, JSON_PRETTY_PRINT);
    file_put_contents("datatamu.json", $json_data_baru);
    header("location: read.php");
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
            background: white;
    }
    .header{
        background: linear-gradient(to right, #80a6a6, #8070b8);
        color: white;
        text-align: center;
        padding: 30px;
        align-content: space-between;
    }
    img{
        width: 70px;
        height: 70px;
        padding-left: 50px;
        position: relative;
        float: left;
        margin-left: 5px;
    }
    .header a{
        float: right;
        text-decoration: none;
        align-content: space-between;
    }
    h1, h3{
        text-align: center;
        font-size: 30px;
    }
    .form-container {
        background: antiquewhite;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-top: 10px;
        border-top: 5px solid navy;
    }
    table{
        margin: auto;
    }
    table tr td{
        border: none;
    }
    td {
        padding: 10px;
        border: 1px solid #ccc;
    }
    input{
        border-radius: 5px;
        border: 1px solid grey;
        color: navy;
        padding: 10px;
        width: 100%;
        background: white;
    }
    button {
        padding: 10px 15px;
        background: green;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        float: right;
    }
    button:hover {
            background: #707070;
    }
    footer{
        background: linear-gradient(to right, #80a6a6, #8070b8);
        color: white; 
            text-align: center; 
            padding: 20px 0; 
            position: relative; 
            width: 100%; 
            bottom: 0; 
    }
    select{
        border-radius: 5px;
        border: 1px solid grey;
        color: navy;
        padding: 10px;
        width: 110%;
        background: white;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="./logo.webp" alt="150px">
            <a href="logout.php">Logout</a>
        </div>

    <h1>Selamat Datang di BPVP Bantaeng,<br>Anda Login sebagai</h1>

    <hr style="border: 1px solid #80a6a6; margin-bottom: 20px;">

    <div class="form-container">
        <h3>Formulir Registrasi Pengunjung</h3>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><input type="text" name="nik"></td>
                </tr>
                <tr>
                    <td>Asal Instansi / Perusahaan</td>
                    <td><input type="text" name="asal"></td>
                </tr>
                <tr>
                    <td>Bidang yang dikunjungi</td>
                    <td>
                        <select name="bidang" id="">
                            <option value=""></option>
                            <option value="umum">umum</option>
                            <option value="khusus">khusus</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Keperluan Berkunjung</td>
                    <td><input type="text" name="perlu"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"></colspan=>
                        <button type="submit" name="submit">simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <footer></footer>
    </div>
    
</body>
</html>