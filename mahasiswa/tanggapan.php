<?php
// We need to include koneksi.php directly here to ensure $koneksi is available
include '../config/koneksi.php';
if (!isset($_SESSION)) {
    session_start();
}
?>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f5ff;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%233b82f6' fill-opacity='0.05'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            padding-top: 80px;
        }
        
        .navbar-custom {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%) !important;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            padding: 0.8rem 1.5rem;
            border-radius: 0 0 1rem 1rem;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }
        
        /* Custom card styles */
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        
        .card-header {
            border-bottom: none;
            padding: 1.25rem 1.5rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        
        .form-card .card-header {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            color: white;
            font-size: 1.25rem;
            display: flex;
            align-items: center;
        }
        
        .history-card .card-header {
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            color: white;
            font-size: 1.25rem;
            display: flex;
            align-items: center;
        }
        
        .form-control {
            border-radius: 0.5rem;
            padding: 0.6rem 1rem;
            border: 1px solid rgba(0,0,0,0.1);
            background-color: #f8faff;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #3b82f6;
            background-color: #fff;
            box-shadow: 0 0 0 0.25rem rgba(59, 130, 246, 0.25);
        }
        
        .navbar-brand {
            font-weight: 600;
            letter-spacing: 0.5px;
            color: white !important;
        }
        
        .nav-link {
            color: rgba(255,255,255,0.85) !important;
            font-weight: 500;
            padding: 0.6rem 1.2rem;
            border-radius: 0.5rem;
            margin: 0 0.3rem;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover, .nav-link:focus {
            color: white !important;
            background: rgba(255,255,255,0.15);
            transform: translateY(-2px);
        }
        
        .footer-custom {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%) !important;
            color: white;
            border-radius: 1rem 1rem 0 0;
            padding: 1.2rem 0;
        }
        
        .nav-link {
            color: rgba(255,255,255,0.85) !important;
            font-weight: 500;
            padding: 0.6rem 1.2rem;
            border-radius: 0.5rem;
            margin: 0 0.3rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        .nav-link:hover, .nav-link:focus {
            color: white !important;
            background: rgba(255,255,255,0.15);
            transform: translateY(-2px);
        }
        
        main {
            flex: 1;
            padding-bottom: 70px;
        }
    </style>
</head>
<body>
<!-- Navigation bar styled like the pre-login page -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <i class="fas fa-graduation-cap me-2"></i>
            <span class="d-none d-md-inline">Mahasiswa Bersatu Untuk Aspirasi</span>
            <span class="d-inline d-md-none">MBUA</span>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fas fa-user-circle me-1"></i>
                        <span><?php echo isset($_SESSION['nama']) ? $_SESSION['nama'] : 'Mahasiswa'; ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../config/aksi_logout.php">
                        <i class="fas fa-sign-out-alt me-1"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
if (isset($_GET['id_pengaduan'])) {
    $id = $_GET['id_pengaduan'];
    $query = mysqli_query($koneksi, "SELECT * FROM pengaduan INNER JOIN tanggapan ON pengaduan.id_pengaduan = tanggapan.id_pengaduan WHERE tanggapan.id_pengaduan = '$id'");
    if ($query && mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
?>
<main class="py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-3">
                <!-- Form Detail Tanggapan -->
                <div class="card form-card mb-4 border-0">
                    <div class="card-header">
                        <i class="fas fa-comments me-2"></i> DETAIL TANGGAPAN
                    </div>
                    <div class="card-body p-4">
                        <div class="card-intro mb-4 text-muted">
                            <p class="mb-0"><i class="fas fa-info-circle me-2"></i> Berikut adalah tanggapan terhadap pengaduan Anda.</p>
                        </div>
                        
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h5 class="fw-bold mb-3"><i class="fas fa-file-alt me-2 text-primary"></i>Pengaduan</h5>
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label fw-medium">Judul Laporan:</label>
                                            <p class="form-control-plaintext"><?= $data['judul_laporan'] ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-medium">Tanggal Pengaduan:</label>
                                            <p class="form-control-plaintext"><?= date('d F Y', strtotime($data['tgl_pengaduan'])) ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-medium">Isi Laporan:</label>
                                            <p class="form-control-plaintext"><?= $data['isi_laporan'] ?></p>
                                        </div>
                                        <div>
                                            <label class="form-label fw-medium">Foto:</label><br>
                                            <img src="../bootstrap/img/<?= $data['foto'] ?>" class="img-fluid rounded shadow-sm" style="max-width: 300px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mt-4 mt-md-0">
                                <h5 class="fw-bold mb-3"><i class="fas fa-reply-all me-2 text-primary"></i>Tanggapan</h5>
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label fw-medium">Tanggal Tanggapan:</label>
                                            <p class="form-control-plaintext"><?= date('d F Y', strtotime($data['tgl_tanggapan'])) ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-medium">Isi Tanggapan:</label>
                                            <p class="form-control-plaintext"><?= $data['tanggapan'] ?></p>
                                        </div>
                                        <div>
                                            <label class="form-label fw-medium">Status:</label>
                                            <?php
                                            if ($data['status'] == 'proses') {
                                                echo "<span class='badge rounded-pill bg-warning px-3 py-2'><i class='fas fa-spinner me-1'></i> Proses</span>";
                                            } elseif ($data['status'] == 'selesai') {
                                                echo "<span class='badge rounded-pill bg-success px-3 py-2'><i class='fas fa-check me-1'></i> Selesai</span>";
                                            } else {
                                                echo "<span class='badge rounded-pill bg-danger px-3 py-2'><i class='fas fa-clock me-1'></i> Menunggu</span>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid d-md-flex justify-content-md-end">
                            <a href="index.php" class="btn btn-primary px-4 py-2 shadow-sm">
                                <i class="fas fa-arrow-left me-2"></i> KEMBALI
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
    } else {
        // No data found
?>
<main class="py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="alert alert-danger" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i> Data tanggapan tidak ditemukan.
                    <a href="index.php" class="btn btn-sm btn-outline-danger ms-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
    }
} else {
    // No id_pengaduan parameter
?>
<main class="py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="alert alert-warning" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i> Parameter ID pengaduan tidak valid.
                    <a href="index.php" class="btn btn-sm btn-outline-warning ms-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
}
?>

<footer class="footer py-3 footer-custom fixed-bottom">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <p class="m-0"><i class="fas fa-code me-1"></i> Kelompok 7</p>
            <p class="m-0">&copy; <?php echo date('Y'); ?> | Proyek 1</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
