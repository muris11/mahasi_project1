<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mahasiswa Bersatu Untuk Aspirasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<section class="min-vh-100 d-flex align-items-center justify-content-center py-3">
  <div class="container-fluid">
    <div class="row g-0 min-vh-100">
      <!-- Bagian gambar / ilustrasi -->
<div class="col-lg-6 col-md-6 d-none d-md-flex align-items-center justify-content-center bg-gradient">
  <div class="text-center text-white p-5">
    <div class="illustration-container mb-4">
      <i class="fas fa-university display-1 mb-3 text-primary animated-icon"></i>
      <h2 class="fw-bold mb-3 text-primary animated-title">Mahasiswa Bersatu Untuk Aspirasi</h2>
      <p class="lead mb-4 text-muted animated-description">Platform digital untuk menyampaikan aspirasi dan keluhan mahasiswa dengan mudah dan transparan.</p>
      <div class="features">
        <div class="d-flex align-items-center mb-2">
          <i class="fas fa-check-circle me-3 text-success"></i>
          <span class="text-muted">Proses pengaduan yang cepat</span>
        </div>
        <div class="d-flex align-items-center mb-2">
          <i class="fas fa-check-circle me-3 text-success"></i>
          <span class="text-muted">Tracking status real-time</span>
        </div>
        <div class="d-flex align-items-center">
          <i class="fas fa-check-circle me-3 text-success"></i>
          <span class="text-muted">Tanggapan yang transparan</span>
        </div>
      </div>
    </div>

    <!-- Informasi login -->
    <div class="card border-0 shadow-sm rounded-4 mt-4 mb-5 bg-light text-start p-3">
      <h6 class="fw-bold mb-3 text-primary">
        <i class="fas fa-info-circle me-2"></i>Informasi Login:
      </h6>
      <ul class="list-unstyled mb-0">
        <li class="mb-2">
          <i class="fas fa-user-graduate text-primary me-2"></i>
          <strong>Mahasiswa:</strong> Gunakan NIM & password
        </li>
        <li>
          <i class="fas fa-user-shield text-primary me-2"></i>
          <strong>Petugas:</strong> Hubungi admin untuk akses
        </li>
      </ul>
    </div>
  </div>
</div>

      <!-- Bagian form -->
      <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
        <div class="login-form-container w-100 px-4 px-lg-5">
          <div class="text-center mb-4 d-md-none">
            <i class="fas fa-university text-primary" style="font-size: 3rem;"></i>
            <h4 class="text-primary fw-bold mt-2">Mahasiswa Bersatu Untuk Aspirasi</h4>
          </div>
          
          <div class="login-card p-4 p-lg-5">
            <div class="text-center mb-4">
              <h2 class="fw-bold text-primary mb-2">Selamat Datang</h2>
              <p class="text-muted">Silakan masuk ke akun Anda</p>
            </div>
            
            <form action="config/aksi_login.php" method="POST" id="loginForm">

              <!-- Username -->
<div class="mb-3">
  <label for="username" class="form-label fw-semibold text-primary">
    <i class="fas fa-user me-2"></i>Username
  </label>
  <input type="text" id="username" class="form-control form-control-lg rounded-3 shadow-sm border-0" 
         placeholder="Masukkan Username" name="username" required>
</div>

<!-- Password -->
<div class="mb-3 position-relative">
  <label for="password" class="form-label fw-semibold text-primary">
    <i class="fas fa-lock me-2"></i>Password
  </label>
  <input type="password" id="password" class="form-control form-control-lg rounded-3 shadow-sm border-0" 
         placeholder="Masukkan Password" name="password" required>
 <button type="button" 
            class="btn btn-link position-absolute end-0" 
            onclick="togglePassword()" 
            style="top: 50%; transform: translateY(-50%); z-index: 5; padding-right: 1rem; color: #0d6efd;">
        <i class="fas fa-eye" id="toggleIcon"></i>
    </button>
</div>


<!-- Login Sebagai -->
<div class="mb-4">
  <label for="level" class="form-label fw-semibold text-primary">
    <i class="fas fa-user-tag me-2"></i>Login Sebagai
  </label>
  <select class="form-select form-select-lg rounded-3 shadow-sm border-0" id="level" name="level">
    <option value="mahasiswa">Mahasiswa</option>
    <option value="petugas">Petugas</option>
  </select>
</div>



<!-- Button -->
<div class="text-center text-lg-start mt-4 pt-2">
  <button type="submit" name="kirim" class="btn btn-primary btn-lg w-100"
          style="max-width: 310px; padding-left: 2.5rem; padding-right: 2.5rem;">
    <i class="fas fa-sign-in-alt me-2"></i> Masuk
  </button>
</div>

            <p class="small fw-bold mt-2 pt-1 mb-0 text-center">
              Belum punya akun? 
              <a href="index.php?page=registrasi" class="link-danger text-decoration-none">Daftar di sini</a>

            </p>
          </div>
        </form>

        

      </div>
    </div>
  </div>

</section>

<style>
/* Modern Design Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: #f8f9fa;
  min-height: 100vh;
}

.bg-gradient {
  background: #ffffff;
  position: relative;
  overflow: hidden;
}

.bg-gradient::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
  pointer-events: none;
}

.illustration-container {
  animation: fadeInUp 0.8s ease-out;
}

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

.features .d-flex {
  animation: slideInLeft 0.6s ease-out;
  animation-fill-mode: both;
}

.features .d-flex:nth-child(1) { animation-delay: 0.2s; }
.features .d-flex:nth-child(2) { animation-delay: 0.4s; }
.features .d-flex:nth-child(3) { animation-delay: 0.6s; }

@keyframes slideInLeft {
  from {
    opacity: 0;
    transform: translateX(-30px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

.login-form-container {
  max-width: 500px;
  animation: slideInRight 0.8s ease-out;
}

@keyframes slideInRight {
  from {
    opacity: 0;
    transform: translateX(30px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

.login-card {
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(15px);
  border-radius: 25px;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
  border: 1px solid rgba(255, 255, 255, 0.3);
}

.form-floating > .form-control,
.form-floating > .form-select {
  border-radius: 15px;
  border: 2px solid #e1e5e9;
  transition: all 0.3s ease;
  background: rgba(255, 255, 255, 0.9);
}

.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
  border-color: #0d6efd;
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
  background: white;
}

.form-floating > label {
  color: #666;
  font-weight: 500;
}

.btn-primary {
  background: #0d6efd;
  border: none;
  border-radius: 15px;
  padding: 12px 30px;
  font-weight: 600;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.btn-primary::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
  transition: left 0.5s;
}

.btn-primary:hover::before {
  left: 100%;
}

.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(13, 110, 253, 0.3);
  background: #0b5ed7;
}

.btn-link {
  color: #666;
  text-decoration: none;
  transition: color 0.3s ease;
}

.btn-link:hover {
  color: #0d6efd;
}

.card {
  transition: all 0.3s ease;
}

.card:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

/* Mobile Responsive Design - Login */
@media (max-width: 768px) {
  body {
    font-size: 16px;
    overflow-x: hidden;
    padding: 0;
    margin: 0;
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
    padding: 0 1rem;
    height: auto;
    max-width: 100%;
    overflow-x: hidden;
  }

  .row {
    margin: 0;
    justify-content: center;
    align-items: center;
    min-height: auto;
  }

  .col-lg-6, .col-md-6 {
    width: 100%;
    max-width: 400px;
    padding: 0;
  }

  /* Form container */
  .login-form-container {
    width: 100%;
    max-width: 100%;
    padding: 0;
  }

  /* Card */
  .login-card {
    padding: 2rem 1.5rem;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    margin: 0 0.5rem;
    width: auto;
  }

  /* Form Elements */
  .form-label {
    font-size: 0.95rem;
    margin-bottom: 0.5rem;
    font-weight: 600;
  }
  
  .form-control, .form-select {
    font-size: 16px;
    padding: 0.875rem 1rem;
    border-radius: 12px;
    min-height: 50px;
  }

  /* Button */
  .btn-primary {
    width: 100% !important;
    padding: 0.875rem;
    font-size: 1rem;
    max-width: 100%;
    border-radius: 12px;
    min-height: 50px;
  }

  /* Mobile Header */
  .d-md-none {
    margin-bottom: 1.5rem;
    text-align: center;
    padding: 0 1rem;
  }

  .d-md-none i {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
  }

  .d-md-none h4 {
    font-size: 1.25rem;
    line-height: 1.3;
    margin-top: 1rem;
  }

  /* Typography */
  .login-card h2 {
    font-size: 1.75rem;
    margin-bottom: 1rem;
  }

  .login-card p {
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

  /* Text Link */
  .small {
    font-size: 0.9rem !important;
  }

  /* Password Toggle */
  .position-relative .btn {
    top: 50% !important;
    right: 1rem !important;
    padding: 0.25rem !important;
    transform: translateY(-50%) !important;
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
  .login-card h2 {
    font-size: 1.5rem;
    margin-bottom: 0.875rem;
  }

  .login-card p {
    font-size: 0.9rem;
    margin-bottom: 1.25rem;
  }

  /* Form Elements */
  .form-control, .form-select {
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

  .form-control, .form-select {
    padding: 10px;
    font-size: 0.85rem;
  }

  .form-label {
    font-size: 0.85rem;
  }

  .btn-primary {
    padding: 11px 0;
    font-size: 0.9rem;
  }
}

/* Additional mobile fixes */
@media (max-width: 768px) {
  /* Ensure proper viewport usage */
  body {
    overflow-x: hidden;
  }
  
  section {
    min-height: auto;
    height: auto;
  }
  
  .container-fluid {
    max-width: 100%;
    overflow-x: hidden;
  }
  
  /* Form spacing */
  .mb-3 {
    margin-bottom: 1rem;
  }
  
  .mb-4 {
    margin-bottom: 1.25rem;
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

/* Loading state */
.btn-loading {
  pointer-events: none;
  opacity: 0.7;
}

.btn-loading .spinner-border {
  width: 1rem;
  height: 1rem;
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
function togglePassword() {
  const passwordInput = document.getElementById('password');
  const toggleIcon = document.getElementById('toggleIcon');
  
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    toggleIcon.classList.remove('fa-eye');
    toggleIcon.classList.add('fa-eye-slash');
  } else {
    passwordInput.type = 'password';
    toggleIcon.classList.remove('fa-eye-slash');
    toggleIcon.classList.add('fa-eye');
  }
}

// Form submission loading state
document.getElementById('loginForm').addEventListener('submit', function(e) {
  const submitBtn = this.querySelector('button[type="submit"]');
  const originalText = submitBtn.innerHTML;
  
  submitBtn.classList.add('btn-loading');
  submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Masuk...';
  
  // Revert after 3 seconds if form doesn't submit
  setTimeout(() => {
    if (submitBtn.classList.contains('btn-loading')) {
      submitBtn.classList.remove('btn-loading');
      submitBtn.innerHTML = originalText;
    }
  }, 3000);
});

// Smooth animations on load
document.addEventListener('DOMContentLoaded', function() {
  const elements = document.querySelectorAll('.form-floating, .card, .btn');
  elements.forEach((el, index) => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    
    setTimeout(() => {
      el.style.transition = 'all 0.5s ease';
      el.style.opacity = '1';
      el.style.transform = 'translateY(0)';
    }, index * 100);
  });
});
</script>

</body>
</html>
