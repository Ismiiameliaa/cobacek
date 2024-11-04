<?php
$karyawan = [
    [
        "nama"=>"Amel",
        "jabatan"=>"CEO",
        "email"=>"amelia@gmail.com",
        "gambar"=>"gbr1.jpeg",
        "umur"=> 17

    ],
    [
        "nama"=>"Agus",
        "jabatan"=>"Manager",
        "email"=>"agus@gmail.com",
        "gambar"=>"gbr2.jpeg",
        "umur"=> 18
    ],
    [
        "nama"=>"Rahman",
        "jabatan"=>"Supervisor", 
        "email"=>"rahman@gmail.com",
        "gambar"=>"gbr3.jpeg",
        "umur"=> 19
    ],
    [
        "nama"=>"Alim", 
        "jabatan"=>"Akuntan", 
        "email"=>"alim@gmail.com",
        "gambar"=>"gbr4.jpeg",
        "umur"=> 20
    ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRY OUT2</title>
    
</head>
<body>
    <h2>DATA KARYAWAN</h2>
    <ul>
        <?php foreach ($karyawan as $kry) { ?> 
            <li>
            <a href="latihancoba2view.php?nama=<?=$kry["nama"]?>&jabatan=<?=$kry["jabatan"]?>&email=<?=$kry["email"]?>&gambar=<?=$kry["gambar"]?>&umur=<?=$kry["umur"]?>"><?=$kry["nama"]?></a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>