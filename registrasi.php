<?php
include 'config/koneksi.php';

$error_message = "";

if (isset($_POST['kirim'])) {
    $nim = trim($_POST['nim']);
    $nama = trim($_POST['nama']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $telp = trim($_POST['telp']);
    $level = 'mahasiswa';

    if (empty($nim) || !is_numeric($nim)) {
        $error_message = "NIM harus berupa angka dan tidak boleh kosong!";
    } elseif (empty($nama)) {
        $error_message = "Nama lengkap tidak boleh kosong!";
    } elseif (empty($username)) {
        $error_message = "Username tidak boleh kosong!";
    } elseif (strlen($password) < 6) {
        $error_message = "Password minimal 6 karakter!";
    } elseif (empty($telp) || !is_numeric($telp)) {
        $error_message = "Nomor telepon harus berupa angka dan tidak boleh kosong!";
    } else {
        $stmt_nim = mysqli_prepare($koneksi, "SELECT nim FROM mahasiswa WHERE nim = ?");
        mysqli_stmt_bind_param($stmt_nim, "s", $nim);
        mysqli_stmt_execute($stmt_nim);
        $result_nim = mysqli_stmt_get_result($stmt_nim);

        if (mysqli_num_rows($result_nim) > 0) {
            $error_message = "NIM sudah terdaftar! Gunakan NIM lain.";
        } else {
            $stmt_username = mysqli_prepare($koneksi, "SELECT username FROM mahasiswa WHERE username = ?");
            mysqli_stmt_bind_param($stmt_username, "s", $username);
            mysqli_stmt_execute($stmt_username);
            $result_username = mysqli_stmt_get_result($stmt_username);

            if (mysqli_num_rows($result_username) > 0) {
                $error_message = "Username sudah digunakan! Pilih username lain.";
            } else {
                $password_hash = md5($password);
                $stmt_insert = mysqli_prepare($koneksi, "INSERT INTO mahasiswa (nim, nama, username, password, telp, level) VALUES (?, ?, ?, ?, ?, ?)");
                mysqli_stmt_bind_param($stmt_insert, "ssssss", $nim, $nama, $username, $password_hash, $telp, $level);

                if (mysqli_stmt_execute($stmt_insert)) {
                    echo "<script>
                        alert('Registrasi berhasil! Silakan login.');
                        window.location='index.php?page=login';
                    </script>";
                } else {
                    $error_message = "Registrasi gagal! Error: " . mysqli_error($koneksi);
                }
                mysqli_stmt_close($stmt_insert);
            }
            mysqli_stmt_close($stmt_username);
        }
        mysqli_stmt_close($stmt_nim);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrasi - Mahasiwasa Bersatu Untuk Aspirasi</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f0f2f5; }
.bg-gradient { background: #ffffff; position: relative; overflow: hidden; }
.bg-gradient::before {
    content: '';
    position: absolute; top: 0; left: 0; right: 0; bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    pointer-events: none;
}
.login-form-container {
    width: 100%;
    max-width: 400px;
    margin: auto;
    animation: slideInRight 0.8s ease-out;
}
@keyframes slideInRight { from{opacity:0; transform:translateX(30px);} to{opacity:1; transform:translateX(0);} }

.login-card {
    background: rgba(255,255,255,0.97);
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    padding: 25px 30px;
    width: 100%;
}

.form-control {
    border-radius: 12px;
    border: 1.5px solid #e1e5e9;
    transition: all 0.3s ease;
    background: rgba(255,255,255,0.95);
}

.form-control:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.2rem rgba(13,110,253,0.15);
    background: white;
}

.btn-primary {
    background: #0d6efd;
    border: none;
    border-radius: 12px;
    padding: 12px 25px;
    font-weight: 600;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    width: 100%;
}
.btn-primary::before {
    content: '';
    position: absolute; top: 0; left: -100%; width: 100%; height: 100%;
    background: linear-gradient(90deg,transparent,rgba(255,255,255,0.2),transparent);
    transition: left 0.5s;
}
.btn-primary:hover::before { left: 100%; }
.btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(13,110,253,0.3); background: #0b5ed7; }

/* Mobile adjustments */
@media (max-width: 768px) {
    .min-vh-100 {
        min-height: auto;
        padding: 1rem 0;
    }
    
    .container-fluid {
        padding: 0;
        height: auto;
    }
    
    .row {
        margin: 0;
        min-height: auto;
    }
    
    .login-card { 
        padding: 2rem 1.5rem; 
        margin: 0 0.5rem; 
        width: 100%;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    }
    
    .login-form-container { 
        padding: 1rem;
        max-width: 100%;
    }
    
    /* Form elements */
    .form-label {
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
    }
    
    .form-control {
        font-size: 0.95rem;
        padding: 12px 15px;
        border-radius: 12px;
    }
    
    .btn-primary { 
        font-size: 1rem;
        padding: 14px;
        border-radius: 12px;
    }
    
    /* Mobile logo */
    .d-md-none {
        margin-bottom: 1.5rem;
    }
    
    .d-md-none i {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
    }
    
    .d-md-none h4 {
        font-size: 1.2rem;
        line-height: 1.3;
    }
    
    /* Title adjustments */
    h2 {
        font-size: 1.75rem;
    }
    
    p {
        font-size: 0.95rem;
    }
    
    /* Alert */
    .alert {
        font-size: 0.9rem;
        padding: 0.75rem 1rem;
    }
    
    /* Text link */
    .small {
        font-size: 0.9rem !important;
    }
    
    /* Password toggle positioning */
    .position-relative .btn {
        top: 60% !important;
        padding-right: 0.75rem !important;
    }
}

@media (max-width: 576px) {
    body {
        font-size: 15px;
    }
    
    section {
        min-height: 100vh;
        padding: 1rem 0;
    }
    
    .container-fluid {
        padding: 0 0.75rem;
    }
    
    .login-card {
        padding: 1.5rem 1.25rem;
        border-radius: 18px;
        margin: 0 0.25rem;
    }
    
    /* Typography */
    h2 {
        font-size: 1.5rem;
        margin-bottom: 0.875rem;
    }
    
    .text-center p {
        font-size: 0.9rem;
        margin-bottom: 1.25rem;
    }
    
    /* Form Elements */
    .form-control {
        font-size: 16px;
        padding: 0.75rem 0.875rem;
        min-height: 46px;
    }
    
    .form-label {
        font-size: 0.9rem;
        margin-bottom: 0.4rem;
    }
    
    .btn-primary {
        padding: 0.75rem;
        font-size: 0.95rem;
        min-height: 46px;
    }
    
    /* Spacing */
    .mb-3 {
        margin-bottom: 1rem;
    }
    
    .mb-4 {
        margin-bottom: 1.25rem;
    }
    
    /* Mobile Header */
    .d-md-none {
        margin-bottom: 1.25rem;
        padding: 0 0.5rem;
    }
    
    .d-md-none h4 {
        font-size: 1.1rem;
        line-height: 1.2;
    }
    
    .d-md-none i {
        font-size: 2.25rem;
    }
    
    /* Alert */
    .alert {
        font-size: 0.85rem;
        padding: 0.75rem;
        margin-bottom: 1.25rem;
    }
    
    /* Text Links */
    .small {
        font-size: 0.85rem !important;
    }
    
    /* Password Toggle */
    .position-relative .btn {
        right: 0.875rem !important;
        padding: 0.25rem !important;
    }
    
    .position-relative .btn i {
        font-size: 0.9rem;
    }
}

@media (max-width: 400px) {
    .login-card {
        padding: 1.25rem 0.75rem;
        margin: 0;
    }
    
    .login-form-container {
        padding: 0.5rem;
    }
    
    .form-control {
        padding: 10px;
        font-size: 0.85rem;
    }
    
    .form-label {
        font-size: 0.85rem;
    }
    
    .btn-primary {
        padding: 11px;
        font-size: 0.9rem;
    }
    
    h2 {
        font-size: 1.3rem;
    }
    
    .alert {
        font-size: 0.8rem;
        padding: 0.5rem 0.7rem;
    }
}

/* Additional mobile fixes */
@media (max-width: 768px) {
    /* Mobile Layout Fixes */
    body {
        overflow-x: hidden;
        padding: 0;
        margin: 0;
        font-size: 16px;
    }
    
    section {
        min-height: 100vh;
        padding: 1rem 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .container-fluid {
        width: 100%;
        max-width: 100%;
        padding: 0 1rem;
        overflow-x: hidden;
    }
    
    .row {
        margin: 0;
        justify-content: center;
        align-items: center;
        min-height: auto;
    }
    
    .col-lg-5, .col-md-8, .col-12 {
        width: 100%;
        max-width: 400px;
        padding: 0;
    }
    
    .login-form-container {
        width: 100%;
        max-width: 100%;
        padding: 0;
    }
    
    .login-card {
        margin: 0 0.5rem;
        padding: 2rem 1.5rem;
        border-radius: 20px;
        width: auto;
        box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    }
    
    /* Form Elements */
    .form-control {
        font-size: 16px;
        padding: 0.875rem 1rem;
        border-radius: 12px;
        min-height: 50px;
    }
    
    .form-label {
        font-size: 0.95rem;
        margin-bottom: 0.5rem;
        font-weight: 600;
    }
    
    .btn-primary {
        padding: 0.875rem;
        font-size: 1rem;
        width: 100%;
        min-height: 50px;
        border-radius: 12px;
    }
    
    /* Typography */
    h2 {
        font-size: 1.75rem;
        margin-bottom: 1rem;
    }
    
    .text-center p {
        font-size: 0.95rem;
        margin-bottom: 1.5rem;
    }
    
    /* Spacing */
    .mb-3 {
        margin-bottom: 1.25rem;
    }
    
    .mb-4 {
        margin-bottom: 1.5rem;
    }
    
    /* Mobile Header */
    .d-md-none {
        margin-bottom: 1.5rem;
        text-align: center;
    }
    
    .d-md-none h4 {
        font-size: 1.25rem;
        line-height: 1.3;
        margin-top: 1rem;
    }
    
    /* Alert */
    .alert {
        margin-bottom: 1.5rem;
        font-size: 0.9rem;
        padding: 1rem;
        border-radius: 12px;
        word-wrap: break-word;
    }
    
    /* Password Toggle */
    .position-relative .btn {
        top: 50%;
        right: 1rem;
        padding: 0.25rem;
    }
}

@media (max-width: 576px) {
    /* Compact mobile layout */
    body {
        font-size: 14px;
    }
    
    .login-form-container {
        width: 100%;
        padding: 0.5rem;
    }
    
    /* Reduce form spacing on very small screens */
    .mb-3 {
        margin-bottom: 0.75rem;
    }
    
    .mb-4 {
        margin-bottom: 1rem;
    }
    
    /* Button adjustments */
    .btn-lg {
        padding: 0.75rem 1rem;
        font-size: 1rem;
    }
}

@media (max-height: 600px) {
    /* For landscape or short screens */
    section {
        padding: 0.5rem 0;
    }
    
    .login-card {
        margin: 0.25rem;
    }
    
    .d-md-none {
        margin-bottom: 1rem;
    }
    
    .mb-4 {
        margin-bottom: 0.75rem;
    }
}

/* Toggle password center vertical */
.input-password-container { position: relative; }
.input-password-container .btn-toggle-password {
    position: absolute;
    top: 50%;
    right: 1rem;
    transform: translateY(-50%);
    color: #0d6efd;
    z-index: 5;
    padding: 0;
}

/* Animated Title and Description */
.animated-icon {
    animation: iconBounce 2s ease-in-out infinite, iconGlow 3s ease-in-out infinite;
    filter: drop-shadow(0 0 10px rgba(13, 110, 253, 0.3));
}

.animated-title {
    background: linear-gradient(45deg, #0d6efd, #6c63ff, #20c997, #fd7e14);
    background-size: 300% 300%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: gradientShift 4s ease-in-out infinite, titleFloat 3s ease-in-out infinite;
    position: relative;
    overflow: hidden;
    text-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.animated-title::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.8), transparent);
    animation: shimmerEffect 3s linear infinite 1s;
}

.animated-description {
    opacity: 0;
    animation: fadeInUp 1.5s ease-out 0.8s forwards, textPulse 4s ease-in-out infinite 2s;
    position: relative;
}

.animated-description::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #0d6efd, #20c997);
    animation: underlineExpand 2s ease-out 1.5s forwards;
}

/* Keyframe Animations */
@keyframes iconBounce {
    0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(-10px); }
    60% { transform: translateY(-5px); }
}

@keyframes iconGlow {
    0%, 100% { filter: drop-shadow(0 0 10px rgba(13, 110, 253, 0.3)); }
    50% { filter: drop-shadow(0 0 20px rgba(13, 110, 253, 0.6)); }
}

@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

@keyframes titleFloat {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}

@keyframes shimmerEffect {
    0% { left: -100%; opacity: 0; }
    50% { opacity: 1; }
    100% { left: 100%; opacity: 0; }
}

@keyframes fadeInUp {
    0% { 
        opacity: 0; 
        transform: translateY(30px); 
    }
    100% { 
        opacity: 1; 
        transform: translateY(0); 
    }
}

@keyframes textPulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.8; }
}

@keyframes underlineExpand {
    0% { width: 0; }
    100% { width: 100%; }
}

/* Hover effects */
.animated-title:hover {
    animation-play-state: paused;
    transform: scale(1.05);
    transition: transform 0.3s ease;
}

.animated-description:hover {
    transform: translateX(10px);
    transition: transform 0.3s ease;
}

.animated-icon:hover {
    animation-play-state: paused;
    transform: scale(1.1) rotateY(15deg);
    transition: transform 0.3s ease;
}

/* Mobile adjustments for animations */
@media (max-width: 768px) {
    .animated-title {
        font-size: 1.5rem;
        animation-duration: 6s;
    }
    
    .animated-description {
        font-size: 1rem;
        animation-delay: 0.5s;
    }
    
    .animated-icon {
        font-size: 2.5rem !important;
        animation-duration: 3s;
    }
}

@media (max-width: 576px) {
    .animated-title {
        font-size: 1.2rem;
        background-size: 200% 200%;
    }
    
    .animated-description {
        font-size: 0.9rem;
    }
    
    .animated-icon {
        font-size: 2rem !important;
    }
}
</style>
</head>
<body>

<section class="min-vh-100 d-flex align-items-center justify-content-center py-3">
  <div class="container-fluid">
    <div class="row g-0 justify-content-center align-items-stretch min-vh-100">
      <!-- Ilustrasi kiri desktop -->
      <div class="col-lg-6 col-md-6 d-none d-md-flex align-items-center justify-content-center bg-gradient">
        <div class="text-center text-white p-5 illustration-container">
          <i class="fas fa-university display-1 mb-3 text-primary animated-icon"></i>
          <h2 class="fw-bold mb-3 text-primary animated-title">Mahasiswa Bersatu Untuk Aspirasi</h2>
          <p class="lead mb-4 text-muted animated-description">Platform digital untuk menyampaikan aspirasi dan keluhan mahasiswa dengan mudah dan transparan.</p>
        </div>
      </div>

      <!-- Form Registrasi -->
      <div class="col-lg-5 col-md-8 col-12 d-flex align-items-center justify-content-center">
        <div class="login-form-container">
          <div class="login-card">
            <div class="text-center mb-4 d-md-none">
              <i class="fas fa-university text-primary" style="font-size: 3rem;"></i>
              <h4 class="text-primary fw-bold mt-2">Mahasiswa Bersatu Untuk Aspirasi</h4>
            </div>

            <h2 class="fw-bold text-primary text-center mb-2">Registrasi Akun</h2>
            <p class="text-muted text-center mb-4">Silakan isi data Anda untuk mendaftar</p>

            <?php if(!empty($error_message)): ?>
            <div class="alert alert-danger alert-dismissible fade show border-0 rounded-3 shadow-sm" role="alert">
              <i class="fas fa-exclamation-triangle me-2"></i> <?= $error_message ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <?php endif; ?>

            <form action="" method="POST">
              <div class="mb-3">
                <label class="form-label fw-semibold text-primary"><i class="fas fa-id-card me-2"></i>NIM</label>
                <input type="number" class="form-control form-control-lg" name="nim" placeholder="Masukkan NIM" value="<?= isset($_POST['nim'])?htmlspecialchars($_POST['nim']):'' ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold text-primary"><i class="fas fa-user me-2"></i>Nama Lengkap</label>
                <input type="text" class="form-control form-control-lg" name="nama" placeholder="Masukkan Nama Lengkap" value="<?= isset($_POST['nama'])?htmlspecialchars($_POST['nama']):'' ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold text-primary"><i class="fas fa-at me-2"></i>Username</label>
                <input type="text" class="form-control form-control-lg" name="username" placeholder="Masukkan Username" value="<?= isset($_POST['username'])?htmlspecialchars($_POST['username']):'' ?>" required>
              </div>
<!-- Password -->
<div class="mb-3 position-relative">
  <label for="password" class="form-label fw-semibold text-primary">
    <i class="fas fa-lock me-2"></i>Password
  </label>
  <input type="password" id="password" class="form-control form-control-lg" 
         placeholder="Masukkan Password" name="password" required>
  <button type="button" 
          class="btn btn-link position-absolute end-0" 
          onclick="togglePassword()" 
          style="top: 65%; transform: translateY(-50%); z-index: 5; padding-right: 1rem; color: #0d6efd; border: none;">
      <i class="fas fa-eye" id="toggleIcon"></i>
  </button>
</div>





              <div class="mb-3">
                <label class="form-label fw-semibold text-primary"><i class="fas fa-phone me-2"></i>No Telepon</label>
                <input type="tel" class="form-control form-control-lg" name="telp" placeholder="Masukkan No.Telp" value="<?= isset($_POST['telp'])?htmlspecialchars($_POST['telp']):'' ?>" required>
              </div>
              <div class="d-grid mt-3">
                <button type="submit" name="kirim" class="btn btn-primary btn-lg fw-semibold">
                  <i class="fas fa-user-plus me-2"></i> Daftar Akun
                </button>
              </div>
              <p class="small fw-bold mt-3 mb-0 text-center">
                Sudah punya akun? 
                <a href="index.php?page=login" class="link-danger text-decoration-none">Login di sini</a>
              </p>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<script>
function togglePassword() {
  const input = document.querySelector('input[name="password"]');
  const icon = document.getElementById('toggleIcon');
  if(input.type === 'password'){
    input.type = 'text';
    icon.classList.replace('fa-eye', 'fa-eye-slash');
  } else {
    input.type = 'password';
    icon.classList.replace('fa-eye-slash', 'fa-eye');
  }
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
