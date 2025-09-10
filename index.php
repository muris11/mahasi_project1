<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa Bersatu Untuk Aspirasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="enhanced-style.css">
       <link rel="icon" type="image/png" href="img/logo.png">
  <!-- Jika ingin dukungan lebih luas -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('img/gsc.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            min-height: 100vh;
        }
        
        /* Home Page Styles */
        .home-hero {
            padding: 3rem 0;
            animation: fadeInUp 0.8s ease-out;
        }
        
        .hero-icon i {
            animation: pulse 2s infinite;
        }
        
        .hero-buttons .btn {
            margin: 0.5rem;
            min-width: 160px;
        }
        
        .content-card {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            box-shadow: 0 5px 25px rgba(0,0,0,0.15);
            padding: 2rem;
            margin-top: 2rem;
            margin-bottom: 6rem;
        }
        
        .feature-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(8px);
            border-radius: 1rem;
            border: 1px solid rgba(59, 130, 246, 0.1);
            transition: all 0.3s ease;
            animation: slideInUp 0.6s ease-out;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(59, 130, 246, 0.2);
            background: rgba(255, 255, 255, 0.95);
        }
        
        .feature-icon i {
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover .feature-icon i {
            transform: scale(1.1);
        }
        
        .steps-section {
            padding: 2rem 0;
        }
        
        .step-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(8px);
            border-radius: 1rem;
            border: 1px solid rgba(59, 130, 246, 0.1);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .step-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.12);
        }
        
        .step-number {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        .about-section {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.05), rgba(37, 99, 235, 0.05));
            border-radius: 1rem;
            border: 1px solid rgba(59, 130, 246, 0.1);
        }
        
        .student-info-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
            border-radius: 1rem;
            border: 1px solid rgba(59, 130, 246, 0.1);
            transition: all 0.3s ease;
        }
        
        .student-info-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.12);
        }
        
        .student-rights .d-flex {
            transition: all 0.3s ease;
        }
        
        .student-rights .d-flex:hover {
            transform: translateX(5px);
        }
        .footer-custom {
    background-color: #007bff; /* atau warna biru yang sama dengan navbar */
}

.footer-custom p {
    color: white;
}
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .home-hero {
                padding: 2rem 0;
            }
            
            .hero-buttons .btn {
                min-width: 140px;
                margin: 0.3rem;
            }
            
            .display-4 {
                font-size: 2rem;
            }
            
            .stat-item h2 {
                font-size: 2rem;
            }
            
            .feature-card, .step-card {
                margin-bottom: 1rem;
            }
        }
        
        @media (max-width: 576px) {
            .content-card {
                padding: 1.5rem;
                margin: 1rem;
            }
            
            .hero-buttons .btn {
                min-width: 120px;
                padding: 0.5rem 1rem;
            }
            
            .display-4 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
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
                        <a class="nav-link" href="index.php?page=registrasi">
                            <i class="fas fa-user-plus me-1"></i>
                            <span>Daftar Akun</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=login">
                            <i class="fas fa-sign-in-alt me-1"></i>
                            <span>Login</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="content-card">
        <?php
        if (isset($_GET['page'])){
            $page=$_GET['page'];
            switch ($page) {
                case 'login':
                include 'login.php';
                break;
                case 'registrasi':
                include 'registrasi.php';
                break;
                default:
                echo "Halaman tidak tersedia";
                break;
            } 
        } else {
        ?>
            <!-- Home Page Content -->
            <div class="home-hero text-center mb-5">
                <div class="hero-icon mb-4">
                    <i class="fas fa-university display-1 text-primary"></i>
                </div>
                <h1 class="display-4 fw-bold text-primary mb-3">Sistem Pengaduan Mahasiswa</h1>
                <p class="lead text-muted mb-4">Platform digital untuk menyampaikan aspirasi dan keluhan mahasiswa dengan mudah, cepat, dan transparan</p>
                <div class="hero-buttons">
                    <a href="index.php?page=registrasi" class="btn btn-primary btn-lg me-3 mb-2">
                        <i class="fas fa-user-plus me-2"></i>Daftar Sekarang
                    </a>
                    <a href="index.php?page=login" class="btn btn-outline-primary btn-lg mb-2">
                        <i class="fas fa-sign-in-alt me-2"></i>Masuk
                    </a>
                </div>
            </div>

            <!-- Features Section -->
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="feature-card text-center p-4 h-100">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-rocket fa-3x text-primary"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Proses Cepat</h5>
                        <p class="text-muted">Pengaduan Anda akan diproses dengan cepat dan efisien oleh tim yang berpengalaman</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center p-4 h-100">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-eye fa-3x text-success"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Transparan</h5>
                        <p class="text-muted">Pantau status pengaduan Anda secara real-time dengan sistem tracking yang transparan</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center p-4 h-100">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-shield-alt fa-3x text-warning"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Aman</h5>
                        <p class="text-muted">Data dan identitas Anda terjamin keamanannya dengan sistem enkripsi terdepan</p>
                    </div>
                </div>
            </div>

            <!-- Steps Section -->
            <div class="steps-section mb-5">
                <h2 class="text-center fw-bold mb-4">Cara Menggunakan Sistem</h2>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="step-card text-center p-4">
                            <div class="step-number mb-3">1</div>
                            <div class="step-icon mb-3">
                                <i class="fas fa-user-plus fa-2x text-primary"></i>
                            </div>
                            <h6 class="fw-bold">Daftar Akun</h6>
                            <p class="small text-muted">Buat akun dengan NIM dan data diri Anda</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="step-card text-center p-4">
                            <div class="step-number mb-3">2</div>
                            <div class="step-icon mb-3">
                                <i class="fas fa-sign-in-alt fa-2x text-success"></i>
                            </div>
                            <h6 class="fw-bold">Login</h6>
                            <p class="small text-muted">Masuk menggunakan username dan password Anda</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="step-card text-center p-4">
                            <div class="step-number mb-3">3</div>
                            <div class="step-icon mb-3">
                                <i class="fas fa-edit fa-2x text-warning"></i>
                            </div>
                            <h6 class="fw-bold">Buat Pengaduan</h6>
                            <p class="small text-muted">Tulis pengaduan Anda dengan detail dan lampirkan bukti</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="step-card text-center p-4">
                            <div class="step-number mb-3">4</div>
                            <div class="step-icon mb-3">
                                <i class="fas fa-check-circle fa-2x text-info"></i>
                            </div>
                            <h6 class="fw-bold">Pantau Status</h6>
                            <p class="small text-muted">Lihat progress dan tanggapan dari pihak terkait</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About Students Section -->
            <div class="about-section p-4 mb-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h3 class="fw-bold mb-4 text-primary">Mahasiswa Bersatu Untuk Aspirasi</h3>
                        <p class="text-muted mb-3">
                            <strong>Mahasiswa Bersatu Untuk Aspirasi (MBUA)</strong> adalah platform digital yang menghubungkan seluruh mahasiswa dalam satu wadah persatuan untuk menyampaikan aspirasi, keluhan, dan masukan kepada pihak institusi pendidikan.
                        </p>
                        <p class="text-muted mb-3">
                            MBUA hadir dengan visi mempersatukan suara mahasiswa dari berbagai latar belakang untuk menciptakan perubahan positif dalam dunia pendidikan. Bersama-sama, kita membangun jembatan komunikasi yang efektif antara mahasiswa dan institusi.
                        </p>
                        <div class="student-rights mt-4">
                            <h6 class="fw-bold mb-3">Fitur Utama MBUA:</h6>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-users text-primary me-2"></i>
                                        <small>Persatuan Mahasiswa</small>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-bullhorn text-warning me-2"></i>
                                        <small>Penyampaian Aspirasi</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-comments text-info me-2"></i>
                                        <small>Komunikasi Efektif</small>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-handshake text-success me-2"></i>
                                        <small>Kolaborasi Institusi</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="student-info-card p-4 text-center">
                            <div class="mb-4">
                                <i class="fas fa-users fa-4x text-primary mb-3"></i>
                            </div>
                            <h5 class="fw-bold mb-3">MBUA - Wadah Aspirasi Mahasiswa</h5>
                            <p class="text-muted mb-4">
                                MBUA memberikan ruang bagi seluruh mahasiswa untuk bersatu menyuarakan aspirasi dan berkontribusi dalam menciptakan perubahan positif di lingkungan pendidikan.
                            </p>
                            <div class="contact-info">
                                <h6 class="fw-bold mb-3">Jenis Pengaduan yang Dapat Disampaikan:</h6>
                                <div class="text-start">
                                    <div class="mb-2">
                                        <i class="fas fa-book text-primary me-2"></i>
                                        <small>Masalah Akademik</small>
                                    </div>
                                    <div class="mb-2">
                                        <i class="fas fa-building text-warning me-2"></i>
                                        <small>Fasilitas Kampus</small>
                                    </div>
                                    <div class="mb-2">
                                        <i class="fas fa-user-tie text-info me-2"></i>
                                        <small>Layanan Administrasi</small>
                                    </div>
                                    <div class="mb-2">
                                        <i class="fas fa-shield-alt text-success me-2"></i>
                                        <small>Keamanan dan Ketertiban</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
    </div>

    <footer class="footer py-3 footer-custom fixed-bottom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <p class="m-0"><i class="fas fa-code me-1"></i> Kelompok 7</p>
                <p class="m-0">&copy; 2025 | Proyek 1</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="enhanced-script.js"></script>
</body>
</html>