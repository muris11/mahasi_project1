<?php
session_start();
include '../config/koneksi.php';

// Check if user is logged in and has admin privileges
if (!isset($_SESSION['login']) || $_SESSION['login'] != 'admin') {
    echo "<script>
        alert('Akses ditolak! Hanya admin yang dapat menghapus data petugas.');
        window.location='index.php?page=petugas';
    </script>";
    exit();
}

// Handle delete action
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_petugas = mysqli_real_escape_string($koneksi, $_GET['id']);
    
    // Check if petugas exists
    $check = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$id_petugas'");
    if (mysqli_num_rows($check) > 0) {
        $petugas_data = mysqli_fetch_assoc($check);
        
        // Prevent deleting admin account
        if ($petugas_data['level'] == 'admin') {
            echo "<script>
                alert('Tidak dapat menghapus akun admin!');
                window.location='index.php?page=petugas';
            </script>";
        } else {
            // Check if petugas has any related tanggapan
            $check_tanggapan = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tanggapan WHERE id_petugas='$id_petugas'");
            $tanggapan_count = mysqli_fetch_assoc($check_tanggapan)['total'];
            
            if ($tanggapan_count > 0) {
                echo "<script>
                    alert('Tidak dapat menghapus petugas karena masih memiliki $tanggapan_count tanggapan terkait!');
                    window.location='index.php?page=petugas';
                </script>";
            } else {
                $hapus = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id_petugas'");
                if ($hapus) {
                    echo "<script>
                        alert('Data petugas \"" . $petugas_data['nama_petugas'] . "\" berhasil dihapus');
                        window.location='index.php?page=petugas';
                    </script>";
                } else {
                    echo "<script>
                        alert('Error: " . mysqli_error($koneksi) . "');
                        window.location='index.php?page=petugas';
                    </script>";
                }
            }
        }
    } else {
        echo "<script>
            alert('Data petugas tidak ditemukan!');
            window.location='index.php?page=petugas';
        </script>";
    }
} else {
    echo "<script>
        alert('ID petugas tidak valid!');
        window.location='index.php?page=petugas';
    </script>";
}
?>