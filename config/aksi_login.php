<?php
session_start();
include 'koneksi.php';

// Validasi input
if (!isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['level'])) {
    echo "<script>
        alert('Data tidak lengkap!');
        window.location='../index.php?page=login';
    </script>";
    exit;
}

$username = trim($_POST['username']);
$password = md5($_POST['password']);
$level = $_POST['level'];

// Validasi input kosong
if (empty($username) || empty($_POST['password'])) {
    echo "<script>
        alert('Username dan Password tidak boleh kosong!');
        window.location='../index.php?page=login';
    </script>";
    exit;
}

// Query berdasarkan level dengan prepared statements untuk keamanan
if ($level == 'mahasiswa') {
    $stmt = mysqli_prepare($koneksi, "SELECT * FROM mahasiswa WHERE username=? AND password=?");
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $login = mysqli_stmt_get_result($stmt);
} else {
    $stmt = mysqli_prepare($koneksi, "SELECT * FROM petugas WHERE username=? AND password=?");
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $login = mysqli_stmt_get_result($stmt);
}

// Cek koneksi database
if (!$login) {
    echo "<script>
        alert('Error database: " . mysqli_error($koneksi) . "');
        window.location='../index.php?page=login';
    </script>";
    exit;
}

$cek = mysqli_num_rows($login);

if($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    if ($data['level'] == 'admin'){
        $_SESSION['id_petugas'] = $data['id_petugas'];
        $_SESSION['nama_petugas'] = $data['nama_petugas'];
        $_SESSION['login'] = "admin";
        header('location:../admin/');
    } elseif ($data['level'] == 'petugas'){
        $_SESSION['id_petugas'] = $data['id_petugas'];
        $_SESSION['nama_petugas'] = $data['nama_petugas'];
        $_SESSION['login'] = "petugas";
        header('location:../admin/');
    } elseif ($data['level'] == 'mahasiswa'){
        $_SESSION['nim'] = $data['nim'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['login'] = "mahasiswa";
        header('location:../mahasiswa/');
    }
} else {
    // Pesan error yang lebih spesifik
    echo "<script>
        alert('Username atau Password salah! Pastikan Anda memilih level login yang benar.');
        window.location='../index.php?page=login';
    </script>";
}
?>