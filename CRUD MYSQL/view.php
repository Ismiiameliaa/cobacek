<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "data_karyawan";

$koneksi = new mysqli($host,$user,$pass,$dbname);

if($koneksi->connect_error){
    die("Koneksi Gagal". $koneksi->connect_error);
}
// echo "Koneksi Berhasil";

// perintah penting untuk koneksi data $koneksi-query
$data = $koneksi->query("SELECT * FROM staff");

// contoh saja dalam mengubah data dalam database menjadi array asosiatif
$data_karyawan = $data->fetch_all(MYSQLI_ASSOC);
// mencetak
// var_dump($data_karyawan);

$no = 1;
// header('location:add.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Karyawan</h2>
    <a href="add.php">Tambahkan Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <!-- apabila tunjangan, bonus, dll tidak perlu dibuat dalam database karena sistem php dapat menghitung secara otomatis. tambahkan saja tabelnya di php -->
            <th>Tunjangan</th>
            <th>Total Penghasilan</th>
            <th>Tanggal Masuk</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($data_karyawan as $dtk){?>
            <tr>
            <td><?=$no++?></td>
            <td><?=$dtk['nama']?></td>
            <td><?=$dtk['jabatan']?></td>
            <!-- ,0 pemisah desimal , . pemisah angka -->
            <td><?="Rp. ".number_format($dk['gaji'],0,',','.')?></td>
            <!-- 1 = 100%, 1.2 = 120% format Rp sama di atas + *1.2-->
            <td><?=$dtk['gaji']*1.2?></td>
            <td><?=$dtk['gaji']*1.2+$dtk['gaji']?></td>
            <td><?=$dtk['tgl_masuk']?></td>     
            <td><a href="edit.php?id=<?=$dtk['id'];?>">Edit</a></td>     
            </tr>
        <?php } ?>
    </table>
    <a href="logout.php">LOGOUT</a>
</body>
</html>
