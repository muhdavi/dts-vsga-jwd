<?php

include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah_asal = $_POST['sekolah_asal'];

$sql = "INSERT INTO siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) 
        VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";

if (mysqli_query($koneksi, $sql)) {
    header("location:list-siswa.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}