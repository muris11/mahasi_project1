<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['login'])) {
    header('location:../index.php');
    exit;
}
?>

<style>
.modern-navbar {
    background: #0d6efd;
    backdrop-filter: blur(20px);
    border: 1px solid rgba(13, 110, 253, 0.3);
    box-shadow: 0 8px 32px rgba(13, 110, 253, 0.2);
    border-radius: 0 0 2rem 2rem;
    padding: 1rem 0;
    position: sticky;
    top: 0;
    z-index: 1000;
    overflow: hidden;
}

.modern-navbar::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(0, 255, 255, 0.1), transparent);
    animation: scan 3s infinite;
}

@keyframes scan {
    0% { left: -100%; }
    100% { left: 100%; }
}

.navbar-brand {
    font-weight: 700;
    font-size: 1.8rem;
    color: #ffffff !important;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.8rem;
    text-shadow: 0 0 20px rgba(255, 255, 255, 0.6);
    position: relative;
    z-index: 2;
}

.navbar-brand i {
    color: #5CB3FF;
    filter: drop-shadow(0 0 10px rgba(92, 179, 255, 0.5));
    animation: glow 2s ease-in-out infinite alternate;
}

@keyframes glow {
    from { filter: drop-shadow(0 0 10px rgba(92, 179, 255, 0.5)); }
    to { filter: drop-shadow(0 0 20px rgba(13, 110, 253, 0.8)); }
}

.navbar-brand:hover {
    color: #5F9EA0 !important;
    transform: translateY(-3px) scale(1.05);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.9) !important;
    font-weight: 600;
    padding: 0.8rem 1.5rem !important;
    border-radius: 1.2rem;
    margin: 0 0.3rem;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    text-decoration: none;
    border: 1px solid transparent;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    position: relative;
    overflow: hidden;
}

.navbar-nav .nav-link::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: rgba(92, 179, 255, 0.3);
    transition: left 0.5s;
}

.navbar-nav .nav-link:hover::before {
    left: 100%;
}

.navbar-nav .nav-link:hover {
    background: rgba(92, 179, 255, 0.2);
    border: 1px solid rgba(92, 179, 255, 0.4);
    color: #fff !important;
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(92, 179, 255, 0.3);
    text-shadow: 0 0 10px rgba(92, 179, 255, 0.8);
}

.navbar-nav .nav-link.active {
    background: rgba(92, 179, 255, 0.3);
    border: 1px solid rgba(92, 179, 255, 0.5);
    color: #fff !important;
    box-shadow: 0 5px 15px rgba(92, 179, 255, 0.4);
    text-shadow: 0 0 15px rgba(92, 179, 255, 1);
}

.navbar-toggler {
    border: none;
    padding: 0.5rem;
    border-radius: 0.5rem;
}

.navbar-toggler:focus {
    box-shadow: none;
}

.user-info {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    background: rgba(92, 179, 255, 0.2);
    border: 1px solid rgba(92, 179, 255, 0.4);
    padding: 0.8rem 1.5rem;
    border-radius: 2rem;
    color: #fff;
    font-weight: 600;
    backdrop-filter: blur(15px);
    box-shadow: 0 5px 15px rgba(92, 179, 255, 0.2);
    text-shadow: 0 0 10px rgba(92, 179, 255, 0.6);
}

.user-info i {
    color: #87CEEB;
    font-size: 1.2rem;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

.user-info .badge {
    background: #5CB3FF !important;
    color: #fff !important;
    font-weight: 700;
    border-radius: 1rem;
    padding: 0.3rem 0.8rem;
}

@keyframes shimmer {
    0% { background-position: -200% center; }
    100% { background-position: 200% center; }
}

.logout-btn {
    background: #0a58ca;
    border: 1px solid rgba(10, 88, 202, 0.5);
    color: #fff;
    padding: 0.8rem 1.5rem;
    border-radius: 2rem;
    font-weight: 600;
    transition: all 0.4s ease;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.8rem;
    box-shadow: 0 5px 15px rgba(10, 88, 202, 0.3);
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
}

@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.logout-btn:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 15px 30px rgba(100, 149, 237, 0.5);
    border: 1px solid rgba(255, 255, 255, 0.8);
    color: #fff;
}

@media (max-width: 768px) {
    .navbar-brand {
        font-size: 1.2rem;
    }
    
    .user-info {
        margin-top: 0.5rem;
        justify-content: center;
    }
    
    .logout-btn {
        margin-top: 0.5rem;
        justify-content: center;
    }
}
</style>

<nav class="navbar navbar-expand-lg modern-navbar">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="index.php">
            <i class="fas fa-shield-alt"></i>
            <span>Admin Panel</span>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i class="fas fa-bars text-white"></i>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo (!isset($_GET['page']) || $_GET['page'] == 'dashboard') ? 'active' : ''; ?>" 
                       href="index.php">
                        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'pengaduan') ? 'active' : ''; ?>" 
                       href="index.php?page=pengaduan">
                        <i class="fas fa-file-alt me-2"></i>Pengaduan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'tanggapan') ? 'active' : ''; ?>" 
                       href="index.php?page=tanggapan">
                        <i class="fas fa-reply me-2"></i>Tanggapan
                    </a>
                </li>
                <?php if ($_SESSION['login'] == 'admin'): ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'petugas') ? 'active' : ''; ?>" 
                       href="index.php?page=petugas">
                        <i class="fas fa-users me-2"></i>Petugas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'mahasiswa') ? 'active' : ''; ?>" 
                       href="index.php?page=mahasiswa">
                        <i class="fas fa-user-graduate me-2"></i>Mahasiswa
                    </a>
                </li>
                <?php endif; ?>
            </ul>
            
            <div class="d-flex flex-column flex-lg-row align-items-lg-center gap-2">
                <div class="user-info">
                    <i class="fas fa-user-circle"></i>
                    <span><?php echo $_SESSION['nama_petugas']; ?></span>
                    <span class="badge bg-light text-dark ms-2"><?php echo ucfirst($_SESSION['login']); ?></span>
                </div>
                <a href="../config/aksi_logout.php" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </div>
</nav>