
<!-- OPERATOR ARITMATIKA -->
<?php
$nilai1 = 10;
$nilai2 = 20;
// $hasil  = $nilai1*$nilai2;

echo $nilai1*$nilai2;
echo "<br>";
echo $nilai1."*".$nilai2."=".$nilai1*$nilai2;
//atau bisa begini di atasnya buat $hasil  = $nilai1*$nilai2;
// echo $nilai1."*".$nilai2."=".$hasil;
?>
<br>
<br>


<!-- ASSIGNMENT -->
<!-- =,+=,-=,*=,%=,.= -->
<?php
$nilai = 10;
$nilai += 20;

echo $nilai;

$nama = "Rizki";
$nama .= " ";
$nama .= "Amalia";

echo $nama;
?>
<br>
<br>


<!-- PERBANDINGAN -->
<!-- <,>,>=,<=,==,!= -->
<?php
var_dump(1>5);
var_dump(1<5);
var_dump(1>=5);
var_dump(1<=5);
var_dump(1 == "1");
var_dump(1 != "1");
?>
<br>
<br>


<!-- PERULANGAN FOR -->
 <?php
 for ($i=1; $i <= 5; $i++){
    echo "cetak sebanyak -".$i;
    echo "<br>";
 }
 ?>
<br>


<!-- PERULANGAN WHILE -->
<?php
 $i=1; 
 while($i<5){
    echo "perulangan while ke -".$i;
    echo "<br>";
    $i++;
 }
 ?>
