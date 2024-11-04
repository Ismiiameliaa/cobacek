<!-- GET DATA FOR PUBLIC LINK URL -->
<?php
$nama = $_GET["nama"];
$umur = $_GET["umur"];

echo "Nama :" .$nama;
echo "<br>";
echo "Umur :" .$umur;

?>
<!-- POST DATA FOR PRIVATE LINK URL -->
<?php
$nama = $_POST["nama"];
$umur = $_POST["umur"];

echo "Nama :" .$nama;
echo "<br>";
echo "Umur :" .$umur;

?>