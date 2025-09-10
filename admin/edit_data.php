<?php

include '../config/koneksi.php';

if (isset($_POST['hapus_pengaduan'])) {
    $id_pengaduan = (int)$_POST['id_pengaduan'];
    $stmt = mysqli_prepare($koneksi, "SELECT foto FROM pengaduan WHERE id_pengaduan=?");
    mysqli_stmt_bind_param($stmt, "i", $id_pengaduan);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_array($result);
    if ($data && is_file('../bootstrap/img/'.$data['foto'])){
        unlink('../bootstrap/img/'.$data['foto']);
    }
    $stmt2 = mysqli_prepare($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan=?");
    mysqli_stmt_bind_param($stmt2, "i", $id_pengaduan);
    mysqli_stmt_execute($stmt2);
    header('location:index.php?page=pengaduan');
}

if (isset($_POST['hapus_tanggapan'])) {
    $id_tanggapan = (int)$_POST['id_tanggapan'];
    $stmt = mysqli_prepare($koneksi, "DELETE FROM tanggapan WHERE id_tanggapan=?");
    mysqli_stmt_bind_param($stmt, "i", $id_tanggapan);
    $result = mysqli_stmt_execute($stmt);
    if ($result) {
        header('location:index.php?page=tanggapan');
}
}

if (isset($_POST['hapus_petugas'])) {
    $id_petugas = (int)$_POST['id_petugas'];
    $stmt = mysqli_prepare($koneksi, "DELETE FROM petugas WHERE id_petugas=?");
    mysqli_stmt_bind_param($stmt, "i", $id_petugas);
    $result = mysqli_stmt_execute($stmt);
    if ($result) {
        header('location:index.php?page=petugas');
}
}
if (isset($_POST['hapus_mahasiswa'])) {
    $nim = mysqli_real_escape_string($koneksi, $_POST['nim']);
    $stmt = mysqli_prepare($koneksi, "DELETE FROM mahasiswa WHERE nim=?");
    mysqli_stmt_bind_param($stmt, "s", $nim);
    $query = mysqli_stmt_execute($stmt);
    if ($query) {
        header('location:index.php?page=mahasiswa');
}
}
?>

