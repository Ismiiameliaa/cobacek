<?php
$json_data = file_get_contents('guestpab.json');
$guestpab = json_decode($json_data, true);
$indeks = $_GET["indeks"];
unset($guestpab[$indeks]);
$guestpab = array_values($guestpab);
$json_update = json_encode($guestpab, JSON_PRETTY_PRINT);
file_put_contents('guestpab.json',$json_update);
header("location:3readpab.php");
echo "Deleted Successfully";
?>