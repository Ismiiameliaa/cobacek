<?php
// mengambil data json
$json_data = file_get_contents('guest.json');
// konversi json ke array (menyimpan, menghapus, mengubah)
$guest = json_decode($json_data,true);
$i = 1;
$indeks = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengunjung</title>
</head>
<body>
    <h2>Data Pengunjung</h2>
    <a href="create.php">Tambah Data</a>
    <table border = "1">
        <tr>
            <th>no</th>
            <th>name</th>
            <th>birth</th>
            <th>email</th>
            <th>contact</th>
            <th>action</th>
        </tr>
        <?php foreach ($guest as $gws) { ?>
            <tr>
                <td>
                    <?=$i++?>
                </td>
                <td>
                    <?=$gws['name']?>
                </td>
                <td>
                    <?=$gws['birth']?>
                </td>
                <td>
                    <?=$gws['email']?>
                </td>
                <td>
                    <?=$gws['contact']?>
                </td>
                <td>
                    <a href="update.php?indeks=<?=$indeks?>">Edit</a>
                    <a href="delete.php?indeks=<?=$indeks++?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </table>
</body>
</html>