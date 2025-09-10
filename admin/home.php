<?php 
include '../config/koneksi.php';
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
$jml_mahasiswa = mysqli_num_rows($mahasiswa);

$petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
$jml_petugas = mysqli_num_rows($petugas);

$tanggapan = mysqli_query($koneksi, "SELECT * FROM tanggapan");
$jml_tanggapan = mysqli_num_rows($tanggapan);

$pengaduan = mysqli_query($koneksi, "SELECT * FROM pengaduan where status='0'");
$jml_pengaduan_pending = mysqli_num_rows($pengaduan);

$pengaduan_proses = mysqli_query($koneksi, "SELECT * FROM pengaduan where status='proses'");
$jml_pengaduan_proses = mysqli_num_rows($pengaduan_proses);

$pengaduan_selesai = mysqli_query($koneksi, "SELECT * FROM pengaduan where status='selesai'");
$jml_pengaduan_selesai = mysqli_num_rows($pengaduan_selesai);

$pengaduan = mysqli_query($koneksi, "SELECT * FROM pengaduan");
$jml_pengaduan = mysqli_num_rows($pengaduan);

?>

<div class="container">
    <!-- Welcome Banner -->
    <div class="row my-4">
        <div class="col-12">
            <div class="card border-0 bg-primary text-white shadow">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="mb-1">Selamat Datang, <?php echo isset($_SESSION['nama']) ? $_SESSION['nama'] : 'Admin'; ?>!</h3>
                            <p class="mb-0">Anda login sebagai <?php echo $_SESSION['login']; ?></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-check me-2"></i>
                            <span><?php echo date('l, d F Y'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Stats Cards -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="bi bi-people-fill text-primary fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 text-muted">Total Mahasiswa</h6>
                        </div>
                    </div>
                    <h2 class="mb-0 fw-bold"><?php echo $jml_mahasiswa; ?></h2>
                    <a href="index.php?page=mahasiswa" class="btn btn-sm btn-light mt-3">
                        <i class="bi bi-eye me-1"></i> Lihat Detail
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-info bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="bi bi-chat-left-dots-fill text-info fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 text-muted">Total Pengaduan</h6>
                        </div>
                    </div>
                    <h2 class="mb-0 fw-bold"><?php echo $jml_pengaduan; ?></h2>
                    <a href="index.php?page=pengaduan" class="btn btn-sm btn-light mt-3">
                        <i class="bi bi-eye me-1"></i> Lihat Detail
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="bi bi-reply-fill text-success fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 text-muted">Total Tanggapan</h6>
                        </div>
                    </div>
                    <h2 class="mb-0 fw-bold"><?php echo $jml_tanggapan; ?></h2>
                    <a href="index.php?page=tanggapan" class="btn btn-sm btn-light mt-3">
                        <i class="bi bi-eye me-1"></i> Lihat Detail
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-warning bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="bi bi-person-badge-fill text-warning fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0 text-muted">Total Petugas</h6>
                        </div>
                    </div>
                    <h2 class="mb-0 fw-bold"><?php echo $jml_petugas; ?></h2>
                    <a href="index.php?page=petugas" class="btn btn-sm btn-light mt-3">
                        <i class="bi bi-eye me-1"></i> Lihat Detail
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Status Cards -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0">
                    <h5 class="mb-0">Status Pengaduan</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="card bg-danger bg-opacity-10 border-0">
                                <div class="card-body p-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-danger mb-1">Menunggu</h6>
                                            <h4 class="mb-0 fw-bold"><?php echo $jml_pengaduan_pending; ?></h4>
                                        </div>
                                        <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                            <i class="bi bi-hourglass text-white fs-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-warning bg-opacity-10 border-0">
                                <div class="card-body p-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-warning mb-1">Diproses</h6>
                                            <h4 class="mb-0 fw-bold"><?php echo $jml_pengaduan_proses; ?></h4>
                                        </div>
                                        <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                            <i class="bi bi-gear text-white fs-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-success bg-opacity-10 border-0">
                                <div class="card-body p-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-success mb-1">Selesai</h6>
                                            <h4 class="mb-0 fw-bold"><?php echo $jml_pengaduan_selesai; ?></h4>
                                        </div>
                                        <div class="bg-success rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                            <i class="bi bi-check-circle text-white fs-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Quick Links -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0">
                    <h5 class="mb-0">Akses Cepat</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <a href="index.php?page=pengaduan" class="card text-decoration-none border-0 shadow-sm bg-light h-100">
                                <div class="card-body text-center p-4">
                                    <div class="rounded-circle bg-primary d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="bi bi-chat-left-text text-white fs-4"></i>
                                    </div>
                                    <h5 class="card-title">Data Pengaduan</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="index.php?page=tanggapan" class="card text-decoration-none border-0 shadow-sm bg-light h-100">
                                <div class="card-body text-center p-4">
                                    <div class="rounded-circle bg-success d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="bi bi-reply text-white fs-4"></i>
                                    </div>
                                    <h5 class="card-title">Data Tanggapan</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="index.php?page=mahasiswa" class="card text-decoration-none border-0 shadow-sm bg-light h-100">
                                <div class="card-body text-center p-4">
                                    <div class="rounded-circle bg-info d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="bi bi-people text-white fs-4"></i>
                                    </div>
                                    <h5 class="card-title">Data Mahasiswa</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="index.php?page=petugas" class="card text-decoration-none border-0 shadow-sm bg-light h-100">
                                <div class="card-body text-center p-4">
                                    <div class="rounded-circle bg-warning d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="bi bi-person-badge text-white fs-4"></i>
                                    </div>
                                    <h5 class="card-title">Data Petugas</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php if ($_SESSION['login'] == 'admin'): ?>
    <!-- System Info -->
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0">
                    <h5 class="mb-0">Informasi Sistem</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th width="200">Nama Sistem</th>
                                    <td>: Mahasiswa Bersatu Untuk Aspirasi (MAHASI)</td>
                                </tr>
                                <tr>
                                    <th>Versi</th>
                                    <td>: 2.0</td>
                                </tr>
                                <tr>
                                    <th>Dibuat oleh</th>
                                    <td>: Kelompok 7 D4 SIKC 1B</td>
                                </tr>
                                <tr>
                                    <th>Dibuat pada</th>
                                    <td>: 26 April 2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>