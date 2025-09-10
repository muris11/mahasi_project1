<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<style>
.modern-footer {
    background: #0d6efd;
    color: #fff;
    padding: 3rem 0 1.5rem 0;
    margin-top: auto;
    border-radius: 2rem 2rem 0 0;
    border: 1px solid rgba(13, 110, 253, 0.3);
    box-shadow: 0 -8px 32px rgba(13, 110, 253, 0.2);
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(20px);
}

.modern-footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 20% 20%, rgba(0, 255, 255, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(255, 0, 255, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 40% 60%, rgba(0, 255, 128, 0.05) 0%, transparent 50%);
    animation: floatingOrbs 10s ease-in-out infinite alternate;
}

@keyframes floatingOrbs {
    0% { 
        background: 
            radial-gradient(circle at 20% 20%, rgba(0, 255, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(255, 0, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 40% 60%, rgba(0, 255, 128, 0.05) 0%, transparent 50%);
    }
    100% { 
        background: 
            radial-gradient(circle at 80% 30%, rgba(0, 255, 255, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 20% 70%, rgba(255, 0, 255, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 60% 40%, rgba(0, 255, 128, 0.1) 0%, transparent 50%);
    }
}

.footer-content {
    position: relative;
    z-index: 1;
}

.footer-brand {
    font-size: 2.2rem;
    font-weight: 700;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.8rem;
    color: #ffffff;
    text-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
}

.footer-brand i {
    color: #5CB3FF;
    filter: drop-shadow(0 0 10px rgba(92, 179, 255, 0.5));
}

@keyframes gradientText {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.footer-description {
    font-size: 1.1rem;
    opacity: 0.9;
    line-height: 1.8;
    margin-bottom: 2rem;
    color: #ffffff;
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.4);
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 0.5rem;
}

.footer-links a {
    color: rgba(255,255,255,0.8);
    text-decoration: none;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.3rem 0;
}

.footer-links a:hover {
    color: #fff;
    transform: translateX(5px);
}

.footer-stats {
    background: rgba(92, 179, 255, 0.2);
    border-radius: 1.5rem;
    padding: 2rem;
    backdrop-filter: blur(20px);
    border: 1px solid rgba(92, 179, 255, 0.4);
    box-shadow: 0 10px 30px rgba(92, 179, 255, 0.3);
    position: relative;
    overflow: hidden;
}

.footer-stats::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: rgba(92, 179, 255, 0.1);
    animation: rotate 6s linear infinite;
}

@keyframes rotate {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.stat-item {
    text-align: center;
    padding: 1.5rem;
    position: relative;
    z-index: 1;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: #ffffff;
    display: block;
    text-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
    animation: numberGlow 2s ease-in-out infinite alternate;
}

@keyframes numberGlow {
    from { filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.5)); }
    to { filter: drop-shadow(0 0 25px rgba(255, 255, 255, 0.8)); }
}

.stat-label {
    font-size: 0.95rem;
    opacity: 0.9;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-top: 0.8rem;
    color: #ffffff;
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.4);
}

.footer-bottom {
    margin-top: 2rem;
    padding-top: 1.5rem;
    border-top: 1px solid rgba(255,255,255,0.2);
    text-align: center;
}

.footer-bottom p {
    margin: 0;
    opacity: 0.8;
    font-size: 0.95rem;
}

.social-links {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 55px;
    height: 55px;
    background: linear-gradient(135deg, rgba(0, 255, 255, 0.1), rgba(255, 0, 255, 0.1));
    border-radius: 50%;
    color: #00ffff;
    text-decoration: none;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: 1px solid rgba(0, 255, 255, 0.3);
    backdrop-filter: blur(10px);
    font-size: 1.2rem;
    position: relative;
    overflow: hidden;
}

.social-links a::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, transparent, rgba(0, 255, 255, 0.2), transparent);
    border-radius: 50%;
    transform: scale(0);
    transition: transform 0.3s ease;
}

.social-links a:hover::before {
    transform: scale(1);
}

.social-links a:hover {
    background: linear-gradient(135deg, rgba(0, 255, 255, 0.2), rgba(255, 0, 255, 0.2));
    transform: translateY(-5px) scale(1.1);
    box-shadow: 0 15px 30px rgba(0, 255, 255, 0.3);
    color: #fff;
    border: 1px solid rgba(255, 255, 255, 0.5);
    text-shadow: 0 0 15px rgba(0, 255, 255, 1);
}

@media (max-width: 768px) {
    .footer-brand {
        font-size: 1.5rem;
        justify-content: center;
        text-align: center;
    }
    
    .footer-description {
        text-align: center;
    }
    
    .stat-item {
        margin-bottom: 1rem;
    }
    
    .footer-links {
        text-align: center;
    }
    
    .footer-links a {
        justify-content: center;
    }
}
</style>

<footer class="modern-footer">
    <div class="container footer-content">
        <div class="row">
            <!-- Brand Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="footer-brand">
                    <i class="fas fa-shield-alt"></i>
                    <span>Admin Panel</span>
                </div>
                <p class="footer-description">
                    Sistem manajemen pengaduan mahasiswa yang modern dan efisien. 
                    Membantu mengelola dan menanggapi setiap aspirasi dengan profesional.
                </p>
                <div class="social-links">
                    <a href="#" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="mb-3">
                    <i class="fas fa-link me-2"></i>Quick Links
                </h5>
                <ul class="footer-links">
                    <li><a href="index.php"><i class="fas fa-home"></i>Dashboard</a></li>
                    <li><a href="index.php?page=pengaduan"><i class="fas fa-file-alt"></i>Pengaduan</a></li>
                    <li><a href="index.php?page=tanggapan"><i class="fas fa-reply"></i>Tanggapan</a></li>
                    <?php if ($_SESSION['login'] == 'admin'): ?>
                    <li><a href="index.php?page=petugas"><i class="fas fa-users"></i>Petugas</a></li>
                    <li><a href="index.php?page=mahasiswa"><i class="fas fa-user-graduate"></i>Mahasiswa</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            
            <!-- Statistics -->
            <div class="col-lg-6 col-md-12 mb-4">
                <h5 class="mb-3">
                    <i class="fas fa-chart-bar me-2"></i>Statistik Sistem
                </h5>
                <div class="footer-stats">
                    <div class="row">
                        <?php
                        // Only include database connection if not already connected
                        if (!isset($koneksi)) {
                            include '../config/koneksi.php';
                        }
                        
                        // Count total pengaduan
                        $total_pengaduan_query = mysqli_query($koneksi, "SELECT * FROM pengaduan");
                        $total_pengaduan = $total_pengaduan_query ? mysqli_num_rows($total_pengaduan_query) : 0;
                        
                        // Count pengaduan selesai
                        $pengaduan_selesai_query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='selesai'");
                        $pengaduan_selesai = $pengaduan_selesai_query ? mysqli_num_rows($pengaduan_selesai_query) : 0;
                        
                        // Count total mahasiswa
                        $total_mahasiswa_query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                        $total_mahasiswa = $total_mahasiswa_query ? mysqli_num_rows($total_mahasiswa_query) : 0;
                        
                        // Count total petugas
                        $total_petugas_query = mysqli_query($koneksi, "SELECT * FROM petugas");
                        $total_petugas = $total_petugas_query ? mysqli_num_rows($total_petugas_query) : 0;
                        ?>
                        <div class="col-6 col-lg-3">
                            <div class="stat-item">
                                <span class="stat-number"><?php echo $total_pengaduan; ?></span>
                                <div class="stat-label text-white">Total Pengaduan</div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="stat-item">
                                <span class="stat-number"><?php echo $pengaduan_selesai; ?></span>
                                                <div class="stat-label text-white">Selesai</div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="stat-item">
                                <span class="stat-number"><?php echo $total_mahasiswa; ?></span>
                                <div class="stat-label text-white">Mahasiswa</div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="stat-item">
                                <span class="stat-number"><?php echo $total_petugas; ?></span>
                                <div class="stat-label text-white">Petugas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>
                <i class="fas fa-code me-2"></i>
                &copy; <?php echo date('Y'); ?> Sistem Pengaduan Mahasiswa. 
                Dibuat dengan oleh Kelompok 7
            </p>
        </div>
    </div>
</footer>