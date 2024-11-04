<?php
session_start();
if(empty($_SESSION['email'])){
    header('location:1loginpab.php');
}

$json_data = file_get_contents('guestpab.json');
$guestpab = json_decode($json_data,true);

$i = 1;
$indeks = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA TAMU</title>
    <style>
        .tabel1{
            margin: auto;
            margin-top: 30px;
            border-spacing: 0px;
        }
        th{
            background-color: brown;
            color: white;
            padding: 12px;
        }
        td{
            padding: 10px;
        }
        /* PEWARNAAN BARIS GANJIL */
        tr:nth-child(even){ */
        background-color: gray;
        }
        /* PEWARNAAN BARIS GENAP */
        tr:nth-child(odd){
            background-color: pink;
        }
    </style>
</head>
<body>
    <h2>Data Pengunjung</h2>
    <div class="button">
            <a href="6logoutpab.php" class="logout">Logout</a>
            <a href="2createpab.php" class="tambah">Add New</a>
        </div>
    <table border = "1">
        <tr>
            <th>no</th>
            <th>name</th>
            <th>birth</th>
            <th>email</th>
            <th>contact</th>
            <th>action</th>
        </tr>
        <?php foreach ($guestpab as $gsp) { ?>
            <tr>
                <td>
                    <?=$i++?>
                </td>
                <td>
                    <?=$gsp['name']?>
                </td>
                <td>
                    <?=$gsp['birth']?>
                </td>
                <td>
                    <?=$gsp['email']?>
                </td>
                <td>
                    <?=$gsp['contact']?>
                </td>
                <td class="aksi">
                        <button class="edit">
                        <a href="4updatepab.php?indeks=<?= $indeks ?>">Edit</a>
                        </button>
                       
                        <button class="delete">
                            <a href="5deletepab.php?indeks=<?= $indeks++ ?>">Delete</a>
                        </button>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>