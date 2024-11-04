<!-- melakukan perubahan dan menyimpannya -->

<?php
// mengambil indeks
$indeks=$_GET['indeks'];
// mengambil file json
$json_data = file_get_contents('guest.json');
// konversi json ke array (menyimpan, menghapus, mengubah)
$guest = json_decode($json_data,true);

if(isset($_POST['submit'])){
    // mengambil data update
    $update_data=[
        "name"=>$_POST['name'],
        "birth"=>$_POST['birth'],
        "email"=>$_POST['email'],
        "contact"=>$_POST['contact'],
    ];

// menyisipkan data update sesuai indeks
$guest[$indeks]=$update_data;
// konversi kembali ke array to json
$json_update_data = json_encode($guest,JSON_PRETTY_PRINT);
// simpan data
file_put_contents('guest.json',$json_update_data);
// arahkan ke read.php
header('location:read.php');
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
    <h2>UPDATE DATA</h2>
    <form action="" method="post">
        Nama Lengkap: <input type="text" name="name" value="<?=$guest[$indeks]['name']?>" required><br>
        Tanggal Lahir: <input type="text" name="birth" value="<?=$guest[$indeks]['birth']?>" required><br>
        Email: <input type="text" name="email" value="<?=$guest[$indeks]['email']?>" required><br>
        Nomor HP: <input type="text" name="contact" value="<?=$guest[$indeks]['contact']?>" required><br>
        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>