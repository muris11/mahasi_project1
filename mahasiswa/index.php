<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Pengaduan Mahasiswa</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tambahkan favicon di sini -->
  <link rel="icon" href="../img/logo.png" type="image/png">
  <link rel="shortcut icon" href="../img/logo.pnh" type="image/png">
</head>
<body>

<?php
session_start();
if(empty($_SESSION['login']=='mahasiswa')){
    header('location:../index.php');
}

// Include header only for specific pages, not for home
if (isset($_GET['page'])){
    $page=$_GET['page'];
    
    // Include header for all pages except home
    include '../layouts/header.php';

    switch ($page) {
        case 'tanggapan':
        include 'tanggapan.php';
        break;
        default:
        // Modern error message for unavailable pages
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'warning',
                    title: 'Halaman Tidak Tersedia',
                    text: 'Maaf, halaman yang Anda cari tidak ditemukan',
                    confirmButtonColor: '#3b82f6'
                }).then(function() {
                    window.location='index.php';
                });
            });
        </script>";
        break;
    } 
} else {
    // For home page, don't include the header (navbar)
    include 'home.php';
}

// Include footer for all pages
include '../layouts/footer.php';

?>
