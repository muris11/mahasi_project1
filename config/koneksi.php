<?php

// Konfigurasi Database

$host = "localhost";

$username = "root";

$password = "";

$database = "pengaduan";



// Membuat koneksi

$koneksi = mysqli_connect($host, $username, $password, $database);



// Cek koneksi

if (!$koneksi) {

    die("Koneksi database gagal: " . mysqli_connect_error());

}



// Set charset ke UTF-8

mysqli_set_charset($koneksi, "utf8");

?>