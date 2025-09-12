<?php
// We need to include koneksi.php directly here to ensure $koneksi is available
include '../config/koneksi.php';
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tanggapan - Mahasiswa Bersatu Untuk Aspirasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f5ff;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%233b82f6' fill-opacity='0.05'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        /* Navbar Styles */
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
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        .nav-link:hover, .nav-link:focus {
            color: white !important;
            background: rgba(255,255,255,0.15);
            transform: translateY(-2px);
        }

        /* Main Content Styles */
        main {
            flex: 1;
            padding: 100px 0 80px 0; /* Top padding for fixed navbar, bottom for footer */
        }
        
        /* Card Styles */
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
        
        .card-body {
            padding: 2rem;
        }

        .card-intro {
            background: #f8faff;
            padding: 1rem 1.5rem;
            border-radius: 0.5rem;
            border-left: 4px solid #3b82f6;
        }
        
        /* Form Elements */
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

        .form-control-plaintext {
            padding: 0.375rem 0;
            margin-bottom: 0;
            font-size: 1rem;
            line-height: 1.6;
            color: #495057;
            background-color: transparent;
            border: none;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #374151;
        }

        /* Status Badges */
        .badge {
            font-size: 0.875rem;
            font-weight: 500;
        }

        /* Button Styles */
        .btn {
            border-radius: 0.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            border: none;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
        }

        /* Footer Styles */
        .footer-custom {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%) !important;
            color: white;
            border-radius: 1rem 1rem 0 0;
            padding: 1.2rem 0;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 999;
        }

        /* Image Styles */
        .img-fluid {
            max-width: 100%;
            height: auto;
            border-radius: 0.5rem;
        }

        /* Alert Styles */
        .alert {
            border-radius: 0.75rem;
            border: none;
            padding: 1.25rem 1.5rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                padding-top: 70px;
            }

            .navbar-custom {
                padding: 0.5rem 1rem;
                border-radius: 0;
            }

            .navbar-brand span {
                font-size: 1rem;
            }

            main {
                padding: 80px 0 80px 0;
            }

            .card-body {
                padding: 1.5rem;
            }

            .card-header {
                padding: 1rem 1.5rem;
                font-size: 1.1rem !important;
            }

            .container-fluid {
                padding: 0 1rem;
            }

            /* Stack columns on mobile */
            .row .col-md-6 {
                margin-bottom: 1.5rem;
            }

            .row .col-md-6:last-child {
                margin-bottom: 0;
            }

            /* Reduce card spacing */
            .card + .card {
                margin-top: 1rem;
            }

            /* Adjust image size on mobile */
            .img-fluid {
                max-width: 100%;
                height: auto;
            }

            /* Button adjustments */
            .btn {
                width: 100%;
                padding: 0.75rem 1rem;
            }

            /* Alert adjustments */
            .alert {
                padding: 1rem;
                font-size: 0.9rem;
            }

            /* Form label and text adjustments */
            .form-label {
                font-size: 0.9rem;
            }

            .form-control-plaintext {
                font-size: 0.9rem;
                line-height: 1.5;
            }

            /* Footer adjustments */
            .footer-custom {
                border-radius: 0;
                padding: 1rem 0;
            }

            .footer-custom p {
                font-size: 0.85rem;
                margin: 0;
            }

            .footer-custom .d-flex {
                flex-direction: column;
                text-align: center;
                gap: 0.5rem;
            }
        }

        @media (max-width: 576px) {
            .navbar-custom {
                padding: 0.5rem 0.75rem;
            }

            .container-fluid {
                padding: 0 0.75rem;
            }

            .card-body {
                padding: 1.25rem;
            }

            .card-header {
                padding: 0.875rem 1.25rem;
                font-size: 1rem !important;
            }

            .card-intro {
                padding: 0.875rem 1.25rem;
                font-size: 0.9rem;
            }

            h5 {
                font-size: 1.1rem;
            }

            .form-label {
                font-size: 0.85rem;
                margin-bottom: 0.375rem;
            }

            .form-control-plaintext {
                font-size: 0.85rem;
                padding: 0.25rem 0;
            }

            .badge {
                font-size: 0.75rem;
                padding: 0.375rem 0.75rem;
            }

            .btn {
                font-size: 0.9rem;
                padding: 0.625rem 1rem;
            }
        }

        @media (max-width: 400px) {
            body {
                padding-top: 60px;
            }

            main {
                padding: 70px 0 70px 0;
            }

            .container-fluid {
                padding: 0 0.5rem;
            }

            .card-body {
                padding: 1rem;
            }

            .card-header {
                padding: 0.75rem 1rem;
                font-size: 0.95rem !important;
            }

            .navbar-brand {
                font-size: 0.9rem;
            }

            .nav-link {
                padding: 0.5rem 0.75rem;
                font-size: 0.85rem;
            }
        }

        /* Loading Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card {
            animation: fadeIn 0.6s ease-out;
        }

        /* Hover Effects */
        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(0,0,0,0.15);
        }

        @media (max-width: 768px) {
            .card:hover {
                transform: none;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation bar -->
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
    <main>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <!-- Form Detail Tanggapan -->
                    <div class="card form-card border-0">
                        <div class="card-header">
                            <i class="fas fa-comments me-2"></i> DETAIL TANGGAPAN
                        </div>
                        <div class="card-body">
                            <div class="card-intro mb-4 text-muted">
                                <p class="mb-0"><i class="fas fa-info-circle me-2"></i> Berikut adalah tanggapan terhadap pengaduan Anda.</p>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <h5 class="fw-bold mb-3"><i class="fas fa-file-alt me-2 text-primary"></i>Pengaduan</h5>
                                    <div class="card bg-light border-0">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label fw-medium">Judul Laporan:</label>
                                                <p class="form-control-plaintext"><?= htmlspecialchars($data['judul_laporan']) ?></p>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-medium">Tanggal Pengaduan:</label>
                                                <p class="form-control-plaintext"><?= date('d F Y', strtotime($data['tgl_pengaduan'])) ?></p>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-medium">Isi Laporan:</label>
                                                <p class="form-control-plaintext"><?= htmlspecialchars($data['isi_laporan']) ?></p>
                                            </div>
                                            <div>
                                                <label class="form-label fw-medium">Foto:</label><br>
                                                <img src="../bootstrap/img/<?= htmlspecialchars($data['foto']) ?>" class="img-fluid rounded shadow-sm" style="max-width: 300px;" alt="Foto Pengaduan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-4">
                                    <h5 class="fw-bold mb-3"><i class="fas fa-reply-all me-2 text-primary"></i>Tanggapan</h5>
                                    <div class="card bg-light border-0">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label fw-medium">Tanggal Tanggapan:</label>
                                                <p class="form-control-plaintext"><?= date('d F Y', strtotime($data['tgl_tanggapan'])) ?></p>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-medium">Isi Tanggapan:</label>
                                                <p class="form-control-plaintext"><?= htmlspecialchars($data['tanggapan']) ?></p>
                                            </div>
                                            <div>
                                                <label class="form-label fw-medium">Status:</label><br>
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

                            <div class="d-grid d-md-flex justify-content-md-end mt-4">
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
    <main>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="alert alert-danger shadow-sm" role="alert">
                        <h5 class="alert-heading"><i class="fas fa-exclamation-triangle me-2"></i>Data Tidak Ditemukan</h5>
                        <p class="mb-3">Data tanggapan yang Anda cari tidak ditemukan dalam sistem.</p>
                        <hr>
                        <div class="mb-0">
                            <a href="index.php" class="btn btn-outline-danger">
                                <i class="fas fa-arrow-left me-1"></i> Kembali ke Dashboard
                            </a>
                        </div>
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
    <main>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="alert alert-warning shadow-sm" role="alert">
                        <h5 class="alert-heading"><i class="fas fa-exclamation-triangle me-2"></i>Parameter Tidak Valid</h5>
                        <p class="mb-3">Parameter ID pengaduan tidak valid atau tidak ditemukan.</p>
                        <hr>
                        <div class="mb-0">
                            <a href="index.php" class="btn btn-outline-warning">
                                <i class="fas fa-arrow-left me-1"></i> Kembali ke Dashboard
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    }
    ?>

    <footer class="footer py-3 footer-custom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <p class="m-0"><i class="fas fa-code me-1"></i> Kelompok 7</p>
                <p class="m-0">&copy; <?php echo date('Y'); ?> | Proyek 1</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        // Add loading animation when page loads
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 200);
            });
        });

        // Handle image loading errors
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('error', function() {
                this.style.display = 'none';
                const container = this.parentElement;
                if (container) {
                    container.innerHTML += '<div class="alert alert-secondary p-2 mt-2"><i class="fas fa-image me-2"></i>Gambar tidak dapat dimuat</div>';
                }
            });
        });
    </script>
</body>
</html>