<?php
// mengambil data json
$json_data = file_get_contents('guest.json');
// konversi json ke array (menyimpan, menghapus, mengubah)
$guest = json_decode($json_data,true);

if(isset($_POST['submit'])){
    $data_baru=[
        "name"=>$_POST['name'],
        "birth"=>$_POST['birth'],
        "email"=>$_POST['email'],
        "contact"=>$_POST['contact'],
        "action"=>$_POST['action'],
    ];

// menambahkan data baru
$guest[]=$data_baru;
// konversi kembali ke array to json
$json_data_baru = json_encode($guest,JSON_PRETTY_PRINT);
// simpan data
file_put_contents('guest.json',$json_data_baru);
// header
header('location:read.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM REGIS</title>
</head>
<body>
    <h2>FORM REGISTRASI</h2>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Sesuai KTP" required><br>
        <input type="text" name="birth" placeholder="Tanggal lahir" required><br>
        <input type="text" name="email" placeholder="Email" required><br>
        <input type="text" name="contact" placeholder="Nomor Telepon" required><br>
        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>