<?php

$akun = [
    [
        "username"=>"Amel",
        "password"=>"amel123"
    ],
    [
        "username"=>"Agus",
         "password"=>"agus123"
    ],
    [
        "username"=>"Rahman",
         "password"=>"rahman123"
    ],
    [
        "username"=>"Alim", 
         "password"=>"alim123"
    ]
    ];
// memanggil getakun.json dan disimpan dalam variabel
$json_data = file_get_contents('getakun.json');

// konversi json_data menjadi array asosiatif
$data = json_decode($json_data,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Akun</title>
</head>
<body>
    <h2>Data Akun</h2>
    <table border = "1">
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <tr><?php foreach ($akun as $akn) { ?>
                <tr>
                    <td><?=$akn['username']?></td>
                    <td><?=$akn['password']?></td>
                </tr>
            <?php } ?>
        </tr>
        </table>
</body>
</html>