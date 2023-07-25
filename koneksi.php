<?php

$host = 'mysql';
$username = 'root';
$password = 'root';
$db_name = 'dts_vsga';

$koneksi = mysqli_connect($host, $username, $password, $db_name);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>