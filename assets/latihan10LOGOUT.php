<?php
session_start();
// unset menghapus isi 
session_unset();
// destroy menghapus variabel
session_destroy();
header('location:latihan10SESSIONLOGIN.php');