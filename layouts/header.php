<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa Bersatu Untuk Aspirasi</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../responsive.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #5CB3FF;
            --accent-color: #0a58ca;
        }
        
        .navbar-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 0.8rem 1rem;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: white !important;
            font-size: 1.5rem;
            letter-spacing: 0.5px;
        }
        
        .nav-link {
            color: white !important;
            font-weight: 500;
            padding: 0.5rem 1rem;
            margin: 0 0.25rem;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: #f8f9fa !important;
            background-color: rgba(255,255,255,0.15);
            border-radius: 5px;
            transform: translateY(-1px);
        }
        
        .nav-link.active {
            background-color: rgba(255,255,255,0.2);
            border-radius: 5px;
        }
        
        .nav-link i {
            margin-right: 5px;
        }
        
        .navbar-toggler {
            border-color: rgba(255,255,255,0.5);
        }
        
        .navbar-toggler-icon {
            filter: brightness(0) invert(1);
        }
        
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
        }
        
        main {
            flex: 1;
            padding-bottom: 70px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <i class="bi bi-megaphone me-2"></i>
                Mahasiswa Bersatu Untuk Aspirasi
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <?php  
                    if ($_SESSION['login']=='admin') { ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['page']) && $_GET['page'] == 'pengaduan' ? 'active' : ''; ?>" href="index.php?page=pengaduan">
                                <i class="bi bi-chat-left-text"></i> Data Pengaduan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['page']) && $_GET['page'] == 'tanggapan' ? 'active' : ''; ?>" href="index.php?page=tanggapan">
                                <i class="bi bi-reply"></i> Data Tanggapan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['page']) && $_GET['page'] == 'mahasiswa' ? 'active' : ''; ?>" href="index.php?page=mahasiswa">
                                <i class="bi bi-people"></i> Data Mahasiswa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['page']) && $_GET['page'] == 'petugas' ? 'active' : ''; ?>" href="index.php?page=petugas">
                                <i class="bi bi-person-badge"></i> Data Petugas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../config/aksi_logout.php">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </a>
                        </li>
                    <?php } else if ($_SESSION['login']=='petugas'){ ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['page']) && $_GET['page'] == 'pengaduan' ? 'active' : ''; ?>" href="index.php?page=pengaduan">
                                <i class="bi bi-chat-left-text"></i> Data Pengaduan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo isset($_GET['page']) && $_GET['page'] == 'tanggapan' ? 'active' : ''; ?>" href="index.php?page=tanggapan">
                                <i class="bi bi-reply"></i> Data Tanggapan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../config/aksi_logout.php">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </a>
                        </li>
                    <?php } else if ($_SESSION['login']=='mahasiswa') { ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'home.php' ? 'active' : ''; ?>" href="home.php">
                                <i class="bi bi-house"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../config/aksi_logout.php">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </a>
                        </li>
                    <?php  }  ?> 
                </ul>
            </div>
        </div>
    </nav>
    
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>