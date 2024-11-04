<!-- ARRAY 1 DIMENSI -->
<?php
$hari = ["Senin", "Selasa", "Rabu", "Kamis"];
// menambah data
$hari[]="Jumat";
// mengubah data
$hari[1]="Sabtu";

var_dump($hari);
?>


<!-- ARRAY MULTIDIMENSI di bawah ini disebut array numerik dan beresiko tertukar data. untuk menghindari hal ini ubah menjadi indeks string yang disebut array assosiative-->
<?php
$mahasiswa = [
    ["Amel", "20125310", "Ilmu Komunikasi", "amelia@gmail.com"],
    ["Agus", "20125112", "Manajemen", "agus@gmail.com"],
    ["Rahman", "20125618", "Ilmu Politik", "rahman@gmail.com"],
    ["Alim", "20125997", "Akuntansi", "alim@gmail.com"]
];
?>


<!-- ARRAY ASSOSIATIVE menggunakan foreach untuk memudahkan database-->
<?php
$karyawan = [
    [
        "nama"=>"Amel",
        "nik"=>"20125310",
        "jurusan"=>"Ilmu Komunikasi",
        "email"=>"amelia@gmail.com",
        "gambar"=>"gbr1.jpeg"
    ],
    [
        "nama"=>"Agus",
        "nik"=>"20125112",
        "jurusan"=>"Manajemen",
        "email"=>"agus@gmail.com",
        "gambar"=>"gbr2.jpeg"
    ],
    [
        "nama"=>"Rahman",
        "nik"=>"20125618", 
        "jurusan"=>"Ilmu Politik", 
        "email"=>"rahman@gmail.com",
        "gambar"=>"gbr3.jpeg"
    ],
    [
        "nama"=>"Alim", 
        "nik"=>"20125997", 
        "jurusan"=>"Akuntansi", 
        "email"=>"alim@gmail.com",
        "gambar"=>"gbr4.jpeg"
    ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMBUAT ARRAY</title>
</head>
<body>
    <!-- membuat ARRAY -->
    <p>
        <?php echo $hari[1]; ?>
    </p>
    <br>
    <!-- atau dengan cara lain di bawah ini namun hanya untuk mencetak string-->
     <p>
        <?=$hari[1]?>
     </p>

     <!-- menampilkan daftar urut harian dengan FOR-->
      <ul>
        <?php for ($i=0; $i < count ($hari); $i++) { ?> 
            <li>
                <?php echo $hari [$i]?>
            </li>
        <?php } ?>
      </ul>

      <!-- menampilkan daftar urut dengan FOREACH-->
      <ul>
        <?php foreach ($mahasiswa as $mhs) { ?> 
            <li><?= $mhs [0]?></li>
            <li><?= $mhs [1]?></li>
            <li><?= $mhs [2]?></li>
            <li><?= $mhs [3]?></li>
            <?="<br>"?>
        <?php } ?>
      </ul>

      <!-- menampilkan daftar urut asosiatif (dari integer ke string) beserta gambar dengan FOREACH-->
      <ul>
        <?php foreach ($karyawan as $kry) { ?> 
            <li><img src="./assets/<?=$kry["gambar"]?>" width="100px"></li>
            <li><?= $kry ["nama"]?></li>
            <li><?= $kry ["nik"]?></li>
            <li><?= $kry ["jurusan"]?></li>
            <li><?= $kry ["email"]?></li>
            <?="<br>"?>
        <?php } ?>
      </ul>
</body>
</html>