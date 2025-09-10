<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Mahasiswa Bersatu Untuk Aspirasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="enhanced-style.css">
       <link rel="icon" type="image/png" href="../img/logo.png">
  <!-- Jika ingin dukungan lebih luas -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php include 'components/navbar.php'; ?>
    
    <main>
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'pengaduan':
                    include 'data_pengaduan.php';
                    break;
                case 'tanggapan':
                    include 'data_tanggapan.php';
                    break;
                case 'petugas':
                    if ($_SESSION['login'] == 'admin') {
                        include 'data_petugas.php';
                    } else {
                        include 'dashboard.php';
                    }
                    break;
                case 'mahasiswa':
                    if ($_SESSION['login'] == 'admin') {
                        include 'data_mahasiswa.php';
                    } else {
                        include 'dashboard.php';
                    }
                    break;
                default:
                    include 'dashboard.php';
                    break;
            }
        } else {
            include 'dashboard.php';
        }
        ?>
    </main>

    <?php include 'components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
