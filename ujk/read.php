<?php
session_start();
if(empty($_SESSION["username"])){
    header("login.php");
}

$json_data = file_get_contents("datatamu.json");
$datatamu = json_decode($json_data, true);

$i = 1;
$indeks = 0;
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
h1{
    text-align: center;
}
p{
    text-align: center;
}

table {
    width: 80%; /* Atur lebar tabel */
    margin: auto; /* Pusatkan tabel */
    border-collapse: collapse; /* Menghilangkan jarak antar border */
}
td {
    padding: 10px;
    border: 1px solid #ccc; /* Tambahkan border pada cell */
    text-align: right;
    display: flex;
    flex-direction: column;
}
th{
    background-color: brown;
    color: white;
    padding: 12px;
    text-align: left;
    display: flex;
    flex-direction: column;
}
tr:nth-child(even){
    background-color: gray;
}
h4{
    text-align: center;
}
footer{
    background: linear-gradient(to right, #80a6a6, #8070b8);
    color: white; 
    text-align: center; 
    padding: 20px 0; 
    width: 100%; 
}
    </style>
</head>
<body>
    <div class="container">
            <div class="header">
                <img src="./logo.webp" alt="150px">
                <a href="logout.php">Logout</a>
            </div>

    <h1>Terimakasih</h1>
    <p>Berikut Data yang telah Anda Masukkan</p>

    <table>
        <tr>
            <th>Nama</th>
            <th>NIK</th>
            <th>Asal instansi / Perusahaan</th>
            <th>Bidang yang dikunjungi</th>
            <th>Keperluan Berkunjung</th>
        </tr>
        <?php foreach($datatamu as $dt){?>
        <tr>
            <td>
                <?=$i++?>
            </td>
            <td>
                <?=$dt['nama']?>
            </td>
            <td>
            <td>
                <?=$dt['nik']?>
            </td>
            <td>
                <?=$dt['asal']?>
            </td>
            <td>
                <?=$dt['bidang']?>
            </td>
            <td>
                <?=$dt['perlu']?>
            </td>
        </tr>
        <?php } ?>
    </table>
    <h4>Gunakan koneksi internet BPVP Bantaeng</h4>
    <h4>Password: bpvp1234</h4>

    <footer></footer>
</div>
</body>
</html>