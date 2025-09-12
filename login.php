<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mahasiswa Bersatu Untuk Aspirasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
body { 
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
    background: #f0f2f5; 
}

.bg-gradient { 
    background: #ffffff; 
    position: relative; 
    overflow: hidden; 
}

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

@keyframes slideInRight { 
    from{opacity:0; transform:translateX(30px);} 
    to{opacity:1; transform:translateX(0);} 
}

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

.form-select {
    border-radius: 12px;
    border: 1.5px solid #e1e5e9;
    transition: all 0.3s ease;
    background: rgba(255,255,255,0.95);
}

.form-select:focus {
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

.btn-primary:hover::before { 
    left: 100%; 
}

.btn-primary:hover { 
    transform: translateY(-2px); 
    box-shadow: 0 6px 20px rgba(13,110,253,0.3); 
    background: #0b5ed7; 
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

/* Features animation */
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

/* Mobile/Tablet Responsive - No Card Background */
@media (max-width: 991px) {
    body {
        background: #f8f9fa;
        padding: 0;
        margin: 0;
    }
    
    section {
        min-height: 100vh;
        padding: 2rem 0;
        background: #f8f9fa;
    }
    
    .container-fluid {
        padding: 0 1rem;
    }
    
    .row {
        justify-content: center;
        align-items: center;
    }
    
    .login-form-container {
        max-width: 500px;
        padding: 0;
    }
    
    /* Remove card styling on mobile */
    .login-card {
        background: transparent;
        box-shadow: none;
        padding: 0;
        border-radius: 0;
    }
    
    /* Mobile header styling */
    .mobile-header {
        text-align: center;
        margin-bottom: 2rem;
        padding: 1rem 0;
    }
    
    .mobile-header i {
        font-size: 3.5rem;
        color: #0d6efd;
        margin-bottom: 1rem;
        display: block;
    }
    
    .mobile-header h1 {
        font-size: 1.5rem;
        color: #0d6efd;
        font-weight: bold;
        margin-bottom: 0.5rem;
        line-height: 1.3;
    }
    
    /* Form styling for mobile */
    .form-section {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        margin-top: 1rem;
    }
    
    .form-section h2 {
        font-size: 1.75rem;
        margin-bottom: 0.5rem;
    }
    
    .form-section p {
        font-size: 1rem;
        margin-bottom: 1.5rem;
    }
    
    .form-control, .form-select {
        font-size: 16px;
        padding: 0.875rem 1rem;
        min-height: 50px;
    }
    
    .form-label {
        font-size: 1rem;
        margin-bottom: 0.5rem;
        font-weight: 600;
    }
    
    .btn-primary {
        padding: 0.875rem;
        font-size: 1.1rem;
        min-height: 50px;
    }
    
    .alert {
        font-size: 0.95rem;
        padding: 1rem;
        margin-bottom: 1.5rem;
        border-radius: 12px;
    }
}

/* Small mobile adjustments */
@media (max-width: 576px) {
    section {
        padding: 1rem 0;
    }
    
    .container-fluid {
        padding: 0 0.75rem;
    }
    
    .mobile-header i {
        font-size: 3rem;
    }
    
    .mobile-header h1 {
        font-size: 1.3rem;
    }
    
    .form-section {
        padding: 1.5rem;
        border-radius: 12px;
    }
    
    .form-section h2 {
        font-size: 1.5rem;
    }
    
    .form-section p {
        font-size: 0.95rem;
    }
    
    .form-control, .form-select {
        font-size: 16px;
        padding: 0.75rem;
        min-height: 48px;
    }
    
    .form-label {
        font-size: 0.95rem;
    }
    
    .btn-primary {
        padding: 0.75rem;
        font-size: 1rem;
        min-height: 48px;
    }
}

/* Extra small screens */
@media (max-width: 400px) {
    .container-fluid {
        padding: 0 0.5rem;
    }
    
    .form-section {
        padding: 1.25rem;
        margin: 0.5rem 0;
    }
    
    .mobile-header {
        margin-bottom: 1.5rem;
    }
    
    .mobile-header i {
        font-size: 2.5rem;
    }
    
    .mobile-header h1 {
        font-size: 1.2rem;
    }
}

/* Landscape mobile */
@media (max-height: 600px) and (max-width: 991px) {
    section {
        padding: 1rem 0;
    }
    
    .mobile-header {
        margin-bottom: 1rem;
    }
    
    .mobile-header i {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
    }
    
    .form-section {
        padding: 1.5rem;
    }
}

/* Password toggle */
.password-toggle {
    position: absolute;
    top: 50%;
    right: 1rem;
    transform: translateY(-50%);
    z-index: 5;
    padding: 0.25rem;
    color: #0d6efd;
    border: none;
    background: none;
}

.password-toggle:hover {
    color: #0b5ed7;
}
</style>
</head>
<body>

<section class="min-vh-100 d-flex align-items-center justify-content-center py-3">
  <div class="container-fluid">
    <div class="row g-0 justify-content-center align-items-stretch min-vh-100">
      
      <!-- Desktop Illustration -->
      <div class="col-lg-6 col-md-6 d-none d-lg-flex align-items-center justify-content-center bg-gradient">
        <div class="text-center text-white p-5 illustration-container">
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

      <!-- Form Section -->
      <div class="col-lg-5 col-md-8 col-12 d-flex align-items-center justify-content-center">
        <div class="login-form-container">
          
          <!-- Mobile Header (visible only on mobile/tablet) -->
          <div class="mobile-header d-lg-none">
            <i class="fas fa-university animated-icon"></i>
            <h1 class="animated-title">Mahasiswa Bersatu Untuk Aspirasi</h1>
          </div>

          <div class="login-card">
            <h2 class="fw-bold text-primary text-center mb-2">Selamat Datang</h2>
            <p class="text-muted text-center mb-4">Silakan masuk ke akun Anda</p>

            <form action="config/aksi_login.php" method="POST" id="loginForm">
              
              <!-- Username -->
              <div class="mb-3">
                <label for="username" class="form-label fw-semibold text-primary">
                  <i class="fas fa-user me-2"></i>Username
                </label>
                <input type="text" id="username" class="form-control form-control-lg" 
                       placeholder="Masukkan Username" name="username" required>
              </div>

              <!-- Password -->
              <div class="mb-3 position-relative">
                <label for="password" class="form-label fw-semibold text-primary">
                  <i class="fas fa-lock me-2"></i>Password
                </label>
                <input type="password" id="password" class="form-control form-control-lg" 
                       placeholder="Masukkan Password" name="password" required>
                <button type="button" 
                        class="btn btn-link password-toggle" 
                        onclick="togglePassword()" 
                        aria-label="Toggle password visibility">
                    <i class="fas fa-eye" id="toggleIcon"></i>
                </button>
              </div>

              <!-- Login Sebagai -->
              <div class="mb-4">
                <label for="level" class="form-label fw-semibold text-primary">
                  <i class="fas fa-user-tag me-2"></i>Login Sebagai
                </label>
                <select class="form-select form-select-lg" id="level" name="level">
                  <option value="mahasiswa">Mahasiswa</option>
                  <option value="petugas">Petugas</option>
                </select>
              </div>

              <!-- Button -->
              <div class="d-grid mt-3">
                <button type="submit" name="kirim" class="btn btn-primary btn-lg fw-semibold">
                  <i class="fas fa-sign-in-alt me-2"></i> Masuk
                </button>
              </div>
              
              <p class="small fw-bold mt-3 mb-0 text-center">
                Belum punya akun? 
                <a href="index.php?page=registrasi" class="link-danger text-decoration-none">Daftar di sini</a>
              </p>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

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
  
  submitBtn.style.opacity = '0.8';
  submitBtn.style.pointerEvents = 'none';
  submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Memproses...';
  
  // Revert after 5 seconds if form doesn't submit
  setTimeout(() => {
    if (submitBtn.style.pointerEvents === 'none') {
      submitBtn.style.opacity = '1';
      submitBtn.style.pointerEvents = 'auto';
      submitBtn.innerHTML = originalText;
    }
  }, 5000);
});

// Prevent zoom on iOS when focusing inputs
if (/iPad|iPhone|iPod/.test(navigator.userAgent)) {
  document.querySelectorAll('input, select, textarea').forEach(function(element) {
    element.addEventListener('focus', function() {
      if (element.style.fontSize !== '16px') {
        element.style.fontSize = '16px';
      }
    });
  });
}
</script>

</body>
</html>