    </main>
    
    <footer class="footer py-3 mt-auto">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="text-muted">&copy; <?php echo date('Y'); ?> Kelompok 7 | Proyek 1</span>
                </div>
                <div class="d-flex gap-3">
                    <a href="#" class="text-decoration-none text-primary">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="text-decoration-none text-primary">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="text-decoration-none text-primary">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Enable tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
        
        // Enable popovers
        const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        const popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        });
    });
    </script>
</body>
</html>