<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa Bersatu Untuk Aspirasi</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
       <link rel="icon" type="image/png" href="../img/logo.png">
  <!-- Jika ingin dukungan lebih luas -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
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
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
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
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            border-bottom: none;
            padding: 1.25rem 1.5rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        /* Card Header Styling */
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
            border: 1px solid rgba(0, 0, 0, 0.1);
            background-color: #f8faff;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #3b82f6;
            background-color: #fff;
            box-shadow: 0 0 0 0.25rem rgba(59, 130, 246, 0.25);
        }

        /* Navbar Styling */
        .navbar-brand {
            font-weight: 600;
            letter-spacing: 0.5px;
            color: white !important;
        }

        /* Footer Styling */
        .footer-custom {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%) !important;
            color: white;
            border-radius: 1rem 1rem 0 0;
            padding: 1.2rem 0;
        }

        /* Navigation Links */
        .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            font-weight: 500;
            padding: 0.6rem 1.2rem;
            border-radius: 0.5rem;
            margin: 0 0.3rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .nav-link:hover,
        .nav-link:focus {
            color: white !important;
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }

        /* Main Content */
        main {
            flex: 1;
            padding-bottom: 70px;
        }

        /* Button Styles */
        .btn-outline-warning {
            border-color: #ffc107;
            color: #ffc107;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-outline-warning:hover {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #212529;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(255, 193, 7, 0.3);
        }

        .btn-outline-danger {
            border-color: #dc3545;
            color: #dc3545;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-outline-danger:hover {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(220, 53, 69, 0.3);
        }

        /* Table Styling */
        .table-hover tbody tr:hover {
            background-color: rgba(59, 130, 246, 0.05);
            transform: scale(1.01);
            transition: all 0.2s ease;
        }

        .table td:last-child {
            min-width: 140px;
        }

        .table img {
            transition: transform 0.3s ease;
        }

        .table img:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        /* Badge Styling */
        .badge {
            font-size: 0.85rem;
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        /* Action Buttons Container */
        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
            align-items: center;
        }

        /* Responsive Design */
        @media (min-width: 576px) {
            .action-buttons {
                flex-direction: row;
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            body {
                font-size: 16px;
                padding-top: 70px;
            }
            
            .navbar-custom {
                height: 70px;
                padding: 0.5rem 1rem;
            }
            
            .navbar-brand {
                font-size: 1rem;
            }
            
            .container-fluid {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            
            .card {
                margin-bottom: 1.5rem;
            }
            
            .card-body {
                padding: 1.25rem !important;
            }
            
            .card-header {
                padding: 1rem 1.25rem;
                font-size: 1.1rem;
            }
            
            /* Form Elements */
            .form-control, .form-select {
                font-size: 16px;
                padding: 0.75rem;
                border-radius: 10px;
                min-height: 48px;
            }
            
            .form-control-lg {
                font-size: 16px;
                padding: 0.875rem;
            }
            
            .form-label {
                font-size: 0.95rem;
                margin-bottom: 0.5rem;
            }
            
            /* Buttons */
            .btn {
                padding: 0.75rem 1rem;
                font-size: 0.9rem;
                border-radius: 8px;
            }
            
            .btn-sm {
                padding: 0.5rem 0.75rem;
                font-size: 0.85rem;
            }
            
            /* Table */
            .table {
                font-size: 0.9rem;
            }
            
            .table td, .table th {
                padding: 0.75rem 0.5rem;
            }
            
            .table td:last-child {
                min-width: 120px;
            }
            
            .table img {
                max-width: 80px !important;
                max-height: 60px !important;
                border-radius: 8px;
            }
            
            /* Action Buttons */
            .action-buttons {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .action-buttons .btn {
                width: 100%;
                justify-content: center;
            }
            
            /* Modal */
            .modal-dialog {
                margin: 1rem;
            }
            
            .modal-lg {
                max-width: calc(100vw - 2rem);
            }
            
            .modal-header {
                padding: 1rem 1.25rem;
            }
            
            .modal-body {
                padding: 1.25rem;
            }
            
            .modal-footer {
                padding: 1rem 1.25rem;
            }
            
            /* Footer */
            .footer-custom {
                height: 60px;
                padding: 0.75rem 0;
            }
            
            main {
                padding-bottom: 60px;
            }
        }

        @media (max-width: 576px) {
            body {
                font-size: 15px;
                padding-top: 65px;
            }
            
            .navbar-custom {
                height: 65px;
                padding: 0.4rem 0.75rem;
            }
            
            .navbar-brand {
                font-size: 0.9rem;
            }
            
            .container-fluid {
                padding: 0 0.75rem;
            }
            
            .card-body {
                padding: 1rem !important;
            }
            
            .card-header {
                padding: 0.875rem 1rem;
                font-size: 1rem;
            }
            
            /* Form Elements */
            .form-control, .form-select {
                font-size: 16px;
                padding: 0.625rem;
                min-height: 44px;
            }
            
            .form-label {
                font-size: 0.9rem;
                margin-bottom: 0.4rem;
            }
            
            /* Buttons */
            .btn {
                padding: 0.625rem 0.875rem;
                font-size: 0.85rem;
            }
            
            .btn-sm {
                padding: 0.4rem 0.6rem;
                font-size: 0.8rem;
                min-width: 60px;
            }
            
            .btn-sm span {
                display: none !important;
            }
            
            /* Table */
            .table {
                font-size: 0.8rem;
            }
            
            .table td, .table th {
                padding: 0.5rem 0.25rem;
            }
            
            .table td:nth-child(3) {
                max-width: 100px;
                word-wrap: break-word;
                overflow-wrap: break-word;
            }
            
            .table img {
                max-width: 60px !important;
                max-height: 45px !important;
            }
            
            /* Action Buttons */
            .action-buttons .btn {
                padding: 0.4rem;
                min-width: 50px;
            }
            
            /* Modal */
            .modal-dialog {
                margin: 0.5rem;
            }
            
            .modal-lg {
                max-width: calc(100vw - 1rem);
            }
            
            .modal-title {
                font-size: 1rem;
            }
            
            .modal-header {
                padding: 0.875rem 1rem;
            }
            
            .modal-body {
                padding: 1rem;
            }
            
            .modal-footer {
                padding: 0.875rem 1rem;
            }
            
            .modal-footer .btn {
                padding: 0.5rem 0.875rem;
                font-size: 0.85rem;
            }
            
            /* Footer */
            .footer-custom {
                height: 55px;
                padding: 0.5rem 0;
                font-size: 0.85rem;
            }
            
            main {
                padding-bottom: 55px;
            }
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

    <main class="py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <!-- Form Pengaduan -->
                    <div class="card form-card mb-4 border-0">
                        <div class="card-header">
                            <i class="fas fa-edit me-2"></i> FORM PENGADUAN
                        </div>
                        <div class="card-body p-4">
                            <div class="card-intro mb-4 text-muted">
                                <p class="mb-0"><i class="fas fa-info-circle me-2"></i> Sampaikan aspirasi Anda dengan lengkap dan jelas untuk mendapatkan tanggapan yang sesuai.</p>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <label class="form-label fw-medium mb-2">
                                            <i class="fas fa-heading me-2 text-primary"></i>Judul Laporan
                                        </label>
                                        <input type="text" class="form-control shadow-sm" name="judul_laporan" placeholder="Masukkan judul yang menggambarkan aspirasi Anda" required>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label fw-medium mb-2">
                                        <i class="fas fa-align-left me-2 text-primary"></i>Isi Laporan
                                    </label>
                                    <textarea class="form-control shadow-sm" name="isi_laporan" rows="5" placeholder="Jelaskan detail aspirasi Anda secara lengkap" required></textarea>
                                    <div class="form-text">Berikan detail yang jelas dan lengkap agar pengaduan dapat ditindaklanjuti dengan baik.</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label fw-medium mb-2">
                                            <i class="fas fa-image me-2 text-primary"></i>Foto Pendukung
                                        </label>
                                        <input type="file" class="form-control shadow-sm" name="foto" accept="image/*" required>
                                        <div class="form-text">Format: JPG, PNG, GIF. Maksimal 4MB. Lampirkan foto yang mendukung aspirasi Anda.</div>
                                    </div>
                                </div>
                                <div class="d-grid d-md-flex justify-content-md-end">
                                    <button type="submit" name="kirim" class="btn btn-primary px-4 py-2 shadow-sm">
                                        <i class="fas fa-paper-plane me-2"></i> KIRIM PENGADUAN
                                    </button>
                                </div>
                            </form>
                            <?php
                            include '../config/koneksi.php';
                            $tanggal = date("Y-m-d");
                            $nim = $_SESSION['nim']; // Initialize nim variable
                            
                            if (isset($_POST['kirim'])) {
                                $nim = htmlspecialchars($_SESSION['nim']);
                                $judul_laporan = htmlspecialchars($_POST['judul_laporan']);
                                $isi_laporan = htmlspecialchars($_POST['isi_laporan']);
                                $status = 0;
                                $foto = $_FILES['foto']['name'];
                                $tmp = $_FILES['foto']['tmp_name'];
                                $lokasi = '../bootstrap/img/';
                                $nama_foto = rand(0, 99) . '-' . $foto;

                                if (move_uploaded_file($tmp, $lokasi . $nama_foto)) {
                                    $query = mysqli_query($koneksi, "INSERT INTO pengaduan VALUES ('','$tanggal','$nim','$judul_laporan','$isi_laporan','$nama_foto','$status')");

                                    if ($query) {
                                        echo "<script>
                            alert('Pengaduan Anda telah berhasil dikirim');
                            window.location='index.php';
                            </script>";
                                    } else {
                                        echo "<script>
                            alert('Terjadi kesalahan saat mengirim data');
                            </script>";
                                    }
                                } else {
                                    echo "<script>
                        alert('Terjadi kesalahan saat mengunggah foto');
                        </script>";
                                }
                            }

                            // Handle Edit Pengaduan
                            if (isset($_POST['submit_edit'])) {
                                $id_pengaduan = mysqli_real_escape_string($koneksi, $_POST['id_pengaduan']);
                                $judul_laporan = mysqli_real_escape_string($koneksi, $_POST['judul_laporan']);
                                $isi_laporan = mysqli_real_escape_string($koneksi, $_POST['isi_laporan']);
                                $foto_lama = mysqli_real_escape_string($koneksi, $_POST['foto_lama']);
                                
                                // Verify pengaduan belongs to user and can be edited
                                $check_query = mysqli_query($koneksi, "SELECT status FROM pengaduan WHERE id_pengaduan='$id_pengaduan' AND nim='$nim'");
                                $check_data = mysqli_fetch_assoc($check_query);
                                
                                if (!$check_data) {
                                    echo "<script>
                                        alert('Pengaduan tidak ditemukan atau bukan milik Anda');
                                        window.location='index.php';
                                    </script>";
                                    exit;
                                }
                                
                                // Check if pengaduan can still be edited (only if status = 0 or empty)
                                if ($check_data['status'] != 0 && $check_data['status'] != '0' && !empty($check_data['status'])) {
                                    echo "<script>
                                        alert('Pengaduan sudah diproses dan tidak dapat diedit lagi');
                                        window.location='index.php';
                                    </script>";
                                    exit;
                                }
                                
                                // Handle photo upload
                                if (!empty($_FILES['foto']['name'])) {
                                    $foto_baru = $_FILES['foto']['name'];
                                    $tmp = $_FILES['foto']['tmp_name'];
                                    $lokasi = '../bootstrap/img/';
                                    
                                    // Generate unique filename
                                    $file_extension = strtolower(pathinfo($foto_baru, PATHINFO_EXTENSION));
                                    $nama_foto = time() . '_' . rand(1000, 9999) . '.' . $file_extension;
                                    
                                    // Validate file type
                                    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
                                    if (!in_array($file_extension, $allowed_types)) {
                                        echo "<script>
                                            alert('Format foto tidak valid. Gunakan JPG, PNG, atau GIF');
                                        </script>";
                                        $foto_final = $foto_lama;
                                    } else if ($_FILES['foto']['size'] > 4 * 1024 * 1024) { // 2MB limit
                                        echo "<script>
                                            alert('Ukuran foto terlalu besar. Maksimal 2MB');
                                        </script>";
                                        $foto_final = $foto_lama;
                                    } else if (move_uploaded_file($tmp, $lokasi . $nama_foto)) {
                                        // Delete old photo if new one is uploaded successfully
                                        if (!empty($foto_lama) && file_exists($lokasi . $foto_lama)) {
                                            unlink($lokasi . $foto_lama);
                                        }
                                        $foto_final = $nama_foto;
                                    } else {
                                        echo "<script>
                                            alert('Gagal mengunggah foto baru, menggunakan foto lama');
                                        </script>";
                                        $foto_final = $foto_lama;
                                    }
                                } else {
                                    $foto_final = $foto_lama;
                                }
                                
                                // Update the pengaduan
                                $query_edit = mysqli_query($koneksi, "UPDATE pengaduan SET 
                                    judul_laporan='$judul_laporan', 
                                    isi_laporan='$isi_laporan', 
                                    foto='$foto_final' 
                                    WHERE id_pengaduan='$id_pengaduan' AND nim='$nim'");
                                
                                if ($query_edit) {
                                    $affected_rows = mysqli_affected_rows($koneksi);
                                    if ($affected_rows > 0) {
                                        echo "<script>
                                            alert('Pengaduan berhasil diperbarui');
                                            window.location='index.php';
                                        </script>";
                                    } else {
                                        echo "<script>
                                            alert('Tidak ada perubahan data yang disimpan');
                                            window.location='index.php';
                                        </script>";
                                    }
                                } else {
                                    echo "<script>
                                        alert('Terjadi kesalahan saat memperbarui data: " . mysqli_error($koneksi) . "');
                                    </script>";
                                }
                            }

                            // Handle Delete Pengaduan via GET
                            if (isset($_GET['hapus'])) {
                                $id_pengaduan = mysqli_real_escape_string($koneksi, $_GET['hapus']);
                                
                                // Get photo name before deleting
                                $get_photo = mysqli_query($koneksi, "SELECT foto FROM pengaduan WHERE id_pengaduan='$id_pengaduan' AND nim='$nim'");
                                $photo_data = mysqli_fetch_assoc($get_photo);
                                
                                $query_hapus = mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan' AND nim='$nim'");
                                
                                if ($query_hapus) {
                                    // Delete photo file if deletion successful
                                    if ($photo_data && $photo_data['foto']) {
                                        $lokasi = '../bootstrap/img/';
                                        if (file_exists($lokasi . $photo_data['foto'])) {
                                            unlink($lokasi . $photo_data['foto']);
                                        }
                                    }
                                    
                                    echo "<script>
                                        alert('Pengaduan berhasil dihapus');
                                        window.location='index.php';
                                    </script>";
                                } else {
                                    echo "<script>
                                        alert('Terjadi kesalahan saat menghapus data atau pengaduan tidak ditemukan');
                                    </script>";
                                }
                            }

                            // Handle Delete Pengaduan via POST (keep for compatibility)
                            if (isset($_POST['submit_hapus'])) {
                                $id_pengaduan = mysqli_real_escape_string($koneksi, $_POST['id_pengaduan']);
                                $foto_hapus = $_POST['foto_hapus'];
                                
                                $query_hapus = mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan' AND nim='$nim' AND status=0");
                                
                                if ($query_hapus) {
                                    // Delete photo file if deletion successful
                                    $lokasi = '../bootstrap/img/';
                                    if (file_exists($lokasi . $foto_hapus)) {
                                        unlink($lokasi . $foto_hapus);
                                    }
                                    
                                    echo "<script>
                                        alert('Pengaduan berhasil dihapus');
                                        window.location='index.php';
                                    </script>";
                                } else {
                                    echo "<script>
                                        alert('Terjadi kesalahan saat menghapus data atau pengaduan sudah diproses');
                                    </script>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-4">
                        <div class="card history-card border-0">
                            <div class="card-header">
                                <i class="fas fa-history me-2"></i> RIWAYAT PENGADUAN
                            </div>
                            <div class="card-body p-4">
                                <div class="table-responsive">
                                    <table class="table table-hover table-borderless align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="py-3">NO</th>
                                                <th class="py-3">JUDUL</th>
                                                <th class="py-3">ISI</th>
                                                <th class="py-3">FOTO</th>
                                                <th class="py-3">STATUS</th>
                                                <th class="py-3">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
    <?php
    $no = 1;
    $nim = $_SESSION['nim'];
    $query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE nim='$nim' ORDER BY id_pengaduan DESC");
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr class="border-bottom">
            <td class="py-3"><?php echo $no++; ?></td>
            <td class="py-3 fw-medium"><?php echo $data['judul_laporan']; ?></td>
            <td class="py-3">
                <?php echo substr($data['isi_laporan'], 0, 100) . (strlen($data['isi_laporan']) > 100 ? '...' : ''); ?>
            </td>
            <td class="py-3">
                <img src="../bootstrap/img/<?php echo $data['foto'] ?>" 
                     class="img-fluid rounded shadow-sm" 
                     style="max-width: 150px; max-height: 100px; object-fit: cover;">
            </td>
            <td class="py-3">
                <?php
                if ($data['status'] == 'proses') {
                    echo "<span class='badge rounded-pill bg-warning px-3 py-2'>
                            <i class='fas fa-spinner me-1'></i> Proses
                          </span>";
                } elseif ($data['status'] == 'selesai') {
                    echo "<span class='badge rounded-pill bg-success px-3 py-2'>
                            <i class='fas fa-check me-1'></i> Selesai
                          </span>";
                    echo "<div class='mt-2'>
                            <a href='index.php?page=tanggapan&id_pengaduan=$data[id_pengaduan]' 
                               class='btn btn-sm btn-outline-primary'>
                               <i class='fas fa-eye me-1'></i> Lihat Tanggapan
                            </a>
                          </div>";
                } else {
                    echo "<span class='badge rounded-pill bg-danger px-3 py-2'>
                            <i class='fas fa-clock me-1'></i> Menunggu
                          </span>";
                }
                ?>
            </td>
            <td class="py-3">
                <div class="d-flex flex-wrap gap-2 justify-content-center">
                    <?php 
                    // Tampilkan tombol edit hanya untuk pengaduan yang belum diproses
                    if ($data['status'] == 0 || $data['status'] == '0' || empty($data['status'])) { ?>
                        <button type="button" 
                                class="btn btn-outline-warning btn-sm px-2 py-1 rounded-pill mb-1"
                                title="Edit Pengaduan"
                                data-bs-toggle="modal" 
                                data-bs-target="#editModal<?php echo $data['id_pengaduan']; ?>">
                            <i class="fas fa-edit me-1"></i><span class="d-none d-sm-inline">Edit</span>
                        </button>
                    <?php } ?>
                    
                    <!-- Tombol hapus selalu ada untuk semua status -->
                    <button type="button" 
                            class="btn btn-outline-danger btn-sm px-2 py-1 rounded-pill mb-1"
                            title="Hapus Pengaduan"
                            data-bs-toggle="modal" 
                            data-bs-target="#deleteModal<?php echo $data['id_pengaduan']; ?>">
                        <i class="fas fa-trash-alt me-1"></i><span class="d-none d-sm-inline">Hapus</span>
                    </button>
                </div>
            </td>
        </tr>

    <?php
    }
    ?>
</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODALS SECTION - Outside of table for proper HTML structure -->
                <?php
                // Reset query for modals
                $nim = $_SESSION['nim'];
                $modal_query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE nim='$nim' ORDER BY id_pengaduan DESC");
                while ($modal_data = mysqli_fetch_array($modal_query)) {
                ?>

                <!-- Modal Edit Pengaduan -->
                <?php if ($modal_data['status'] == 0 || $modal_data['status'] == '0' || empty($modal_data['status'])) { ?>
                <div class="modal fade" id="editModal<?php echo $modal_data['id_pengaduan']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo $modal_data['id_pengaduan']; ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow-lg">
                            <div class="modal-header bg-warning text-dark">
                                <h5 class="modal-title fw-bold" id="editModalLabel<?php echo $modal_data['id_pengaduan']; ?>">
                                    <i class="fas fa-edit me-2"></i>Edit Pengaduan
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_pengaduan" value="<?php echo $modal_data['id_pengaduan']; ?>">
                                <input type="hidden" name="foto_lama" value="<?php echo $modal_data['foto']; ?>">
                                <div class="modal-body py-4">
                                    <div class="mb-4">
                                        <label class="form-label fw-medium mb-2">
                                            <i class="fas fa-heading me-2 text-warning"></i>Judul Laporan
                                        </label>
                                        <input type="text" class="form-control form-control-lg shadow-sm" 
                                               name="judul_laporan" 
                                               value="<?php echo htmlspecialchars($modal_data['judul_laporan']); ?>" 
                                               required>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label fw-medium mb-2">
                                            <i class="fas fa-align-left me-2 text-warning"></i>Isi Laporan
                                        </label>
                                        <textarea class="form-control shadow-sm" 
                                                  name="isi_laporan" 
                                                  rows="6" 
                                                  required><?php echo htmlspecialchars($modal_data['isi_laporan']); ?></textarea>
                                        <div class="form-text">Jelaskan detail aspirasi Anda secara lengkap dan jelas.</div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label fw-medium mb-2">
                                            <i class="fas fa-image me-2 text-warning"></i>Foto Pendukung (Opsional)
                                        </label>
                                        <input type="file" class="form-control shadow-sm" name="foto" accept="image/*">
                                        <div class="form-text">Kosongkan jika tidak ingin mengganti foto. Format: JPG, PNG, GIF. Maksimal 2MB.</div>
                                        
                                        <div class="mt-3 p-3 bg-light rounded">
                                            <small class="text-muted d-block mb-2 fw-medium">Foto saat ini:</small>
                                            <img src="../bootstrap/img/<?php echo $modal_data['foto']; ?>" 
                                                 class="img-thumbnail shadow-sm d-block mx-auto" 
                                                 style="max-width: 100%; max-height: 200px; object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer bg-light">
                                    <button type="button" class="btn btn-outline-secondary px-4" data-bs-dismiss="modal">
                                        <i class="fas fa-times me-2"></i>Batal
                                    </button>
                                    <button type="submit" class="btn btn-warning px-4 fw-bold" name="submit_edit">
                                        <i class="fas fa-save me-2"></i>Simpan Perubahan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <!-- Modal Delete Pengaduan -->
                <div class="modal fade" id="deleteModal<?php echo $modal_data['id_pengaduan']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo $modal_data['id_pengaduan']; ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0 shadow-lg">
                            <div class="modal-header bg-danger text-white">
                                <h5 class="modal-title fw-bold" id="deleteModalLabel<?php echo $modal_data['id_pengaduan']; ?>">
                                    <i class="fas fa-exclamation-triangle me-2"></i>Konfirmasi Hapus
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body py-4 text-center">
                                <div class="mb-3">
                                    <i class="fas fa-exclamation-triangle text-danger" style="font-size: 3rem;"></i>
                                </div>
                                <h6 class="fw-bold mb-3">Apakah Anda yakin ingin menghapus pengaduan ini?</h6>
                                <div class="alert alert-light border">
                                    <strong>Judul:</strong> "<?php echo htmlspecialchars($modal_data['judul_laporan']); ?>"
                                </div>
                                <div class="alert alert-warning">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>Peringatan:</strong> Tindakan ini tidak dapat dibatalkan!
                                </div>
                            </div>
                            <div class="modal-footer bg-light justify-content-center">
                                <button type="button" class="btn btn-outline-secondary px-4" data-bs-dismiss="modal">
                                    <i class="fas fa-times me-2"></i>Batal
                                </button>
                                <a href="?hapus=<?php echo $modal_data['id_pengaduan']; ?>" class="btn btn-danger px-4 fw-bold">
                                    <i class="fas fa-trash-alt me-2"></i>Ya, Hapus!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>

    </main>

    <footer class="footer py-3 footer-custom fixed-bottom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <p class="m-0"><i class="fas fa-code me-1"></i> Kelompok 7</p>
                <p class="m-0">&copy; <?php echo date('Y'); ?> | Proyek 1</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



<script>
document.addEventListener('DOMContentLoaded', function() {
    // Pastikan tidak ada modal yang otomatis terbuka
    const modals = document.querySelectorAll('.modal');
    modals.forEach(function(modal) {
        // Reset semua modal ke state hidden
        modal.classList.remove('show');
        modal.style.display = 'none';
        modal.setAttribute('aria-hidden', 'true');
        modal.removeAttribute('aria-modal');
        modal.removeAttribute('role');
    });
    
    // Hapus backdrop yang mungkin tertinggal
    const backdrops = document.querySelectorAll('.modal-backdrop');
    backdrops.forEach(function(backdrop) {
        backdrop.remove();
    });
    
    // Reset body class
    document.body.classList.remove('modal-open');
    document.body.style.overflow = '';
    document.body.style.paddingRight = '';
});
</script>

</body>

</html>