<?php
// mengambil data json
$json_data = file_get_contents('guest.json');
// konevrsi json to array
$guest = json_decode($json_data,true);
// mengambil indeks
$indeks=$_GET['indeks'];
// delete data
unset($guest[$indeks]);
// reset indeks
$guest = array_values($guest);
// array to json
$data_baru = json_encode($guest, JSON_PRETTY_PRINT);
// simpan json
file_put_contents('guest.json',$data_baru);
// arahkan
header('location:read.php');
?>