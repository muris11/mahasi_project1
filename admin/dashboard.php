<?php
// Dashboard content
include '../config/koneksi.php';

// Get statistics
$total_pengaduan = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pengaduan"));
$pengaduan_menunggu = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='0'"));
$pengaduan_proses = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='proses'"));
$pengaduan_selesai = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='selesai'"));
?>

<style>
.dashboard-card {
    border-radius: 1.5rem;
    transition: all 0.3s ease;
}

.dashboard-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.card-total {
    background: #17a2b8 !important;
    border: 1px solid #17a2b8 !important;
}

.card-waiting {
    background: #ffc107 !important;
    border: 1px solid #ffc107 !important;
}

.card-process {
    background: #fd7e14 !important;
    border: 1px solid #fd7e14 !important;
}

.card-done {
    background: #28a745 !important;
    border: 1px solid #28a745 !important;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: #ffffff;
    text-shadow: 0 0 20px #0a58ca;
}

.welcome-card {
    background: #0d6efd;
    border: 1px solid #0d6efd;
    border-radius: 1.5rem;
    padding: 2rem;
    text-align: center;
    margin-bottom: 2rem;
}

.welcome-title {
    font-size: 2.2rem;
    font-weight: 700;
    color: #ffffff;
    text-shadow: 0 0 20px #0a58ca;
    margin-bottom: 1rem;
}

.btn-outline-light {
    border: 2px solid #ffffff;
    color: #ffffff;
    background: #0a58ca;
    transition: all 0.3s ease;
}

.btn-outline-light:hover {
    background: #ffffff;
    border-color: #ffffff;
    color: #0d6efd;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px #0a58ca;
}

.btn-pengaduan:hover {
    background: #17a2b8 !important;
    border-color: #17a2b8 !important;
    color: #ffffff !important;
}

.btn-tanggapan:hover {
    background: #28a745 !important;
    border-color: #28a745 !important;
    color: #ffffff !important;
}

.btn-petugas:hover {
    background: #fd7e14 !important;
    border-color: #fd7e14 !important;
    color: #ffffff !important;
}

.btn-mahasiswa:hover {
    background: #ffc107 !important;
    border-color: #ffc107 !important;
    color: #ffffff !important;
}

.stat-label {
    font-size: 0.95rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-top: 0.8rem;
    color: #ffffff;
    text-shadow: 0 0 5px #0a58ca;
}
</style>

<div class="container-fluid px-4" style="padding-top: 2rem; padding-bottom: 3rem;">
    <!-- Welcome Card -->
    <div class="welcome-card">
        <h1 class="welcome-title">
            Selamat Datang, <?php echo isset($_SESSION['nama_petugas']) ? $_SESSION['nama_petugas'] : 'User'; ?>!
        </h1>
        <p class="lead text-white mb-0">
            Dashboard Admin Panel Sistem Pengaduan Mahasiswa
        </p>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-4">
        <div class="col-xl-3 col-md-6">
            <div class="card dashboard-card card-total text-center p-4">
                <div class="card-body">
                    <i class="fas fa-file-alt fa-3x text-white mb-3"></i>
                    <div class="stat-number text-white"><?php echo $total_pengaduan; ?></div>
                    <div class="stat-label text-white">Total Pengaduan</div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6">
            <div class="card dashboard-card card-waiting text-center p-4">
                <div class="card-body">
                    <i class="fas fa-clock fa-3x text-white mb-3"></i>
                    <div class="stat-number text-white"><?php echo $pengaduan_menunggu; ?></div>
                    <div class="stat-label text-white">Menunggu</div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6">
            <div class="card dashboard-card card-process text-center p-4">
                <div class="card-body">
                    <i class="fas fa-spinner fa-3x text-white mb-3"></i>
                    <div class="stat-number text-white"><?php echo $pengaduan_proses; ?></div>
                    <div class="stat-label text-white">Diproses</div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6">
            <div class="card dashboard-card card-done text-center p-4">
                <div class="card-body">
                    <i class="fas fa-check-circle fa-3x text-white mb-3"></i>
                    <div class="stat-number text-white"><?php echo $pengaduan_selesai; ?></div>
                    <div class="stat-label text-white">Selesai</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card dashboard-card p-4">
                <div class="card-body">
                    <h3 class="text-center text-white mb-4">
                        <i class="fas fa-bolt me-2"></i>Quick Actions
                    </h3>
                    <div class="row text-center">
                        <div class="col-md-3 mb-3">
                            <a href="index.php?page=pengaduan" class="btn btn-outline-light btn-pengaduan btn-lg w-100">
                                <i class="fas fa-file-alt d-block mb-2"></i>
                                Kelola Pengaduan
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a href="index.php?page=tanggapan" class="btn btn-outline-light btn-tanggapan btn-lg w-100">
                                <i class="fas fa-reply d-block mb-2"></i>
                                Lihat Tanggapan
                            </a>
                        </div>
                        <?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'admin'): ?>
                        <div class="col-md-3 mb-3">
                            <a href="index.php?page=petugas" class="btn btn-outline-light btn-petugas btn-lg w-100">
                                <i class="fas fa-users d-block mb-2"></i>
                                Kelola Petugas
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a href="index.php?page=mahasiswa" class="btn btn-outline-light btn-mahasiswa btn-lg w-100">
                                <i class="fas fa-user-graduate d-block mb-2"></i>
                                Kelola Mahasiswa
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>