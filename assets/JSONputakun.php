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

    //merubah array menjadi json
     $json_data = json_encode($akun, JSON_PRETTY_PRINT);
    //menyimpan ke dalam file akun.json
      file_put_contents('putakun.json',$json_data);
      echo "Data Berhasil Ditambahkan";