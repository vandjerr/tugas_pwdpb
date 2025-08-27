<?php
$host = "localhost";
$user = "root";
$pass = "123";
$dbname = "db_siswa";

// Membuat koneksi
$koneksi = new mysqli($host,$user,$pass,$dbname);

// Mengecek koneksi
if ($koneksi->connect_error){
    die("Koneksi gagal:" . $koneksi->connect_error);
}
?>