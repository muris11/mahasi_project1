

<?php
// Handle delete action
if (isset($_GET['aksi']) && $_GET['aksi'] == 'hapus' && isset($_GET['id_petugas'])) {
    $id_petugas = mysqli_real_escape_string($koneksi, $_GET['id_petugas']);
    
    // Check if petugas exists
    $check = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$id_petugas'");
    if (mysqli_num_rows($check) > 0) {
        $petugas_data = mysqli_fetch_assoc($check);
        
        // Prevent deleting admin account
        if ($petugas_data['level'] == 'admin') {
            echo "<script>
                alert('Tidak dapat menghapus akun admin!');
                window.location='index.php?page=petugas';
            </script>";
        } else {
            $hapus = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id_petugas'");
            if ($hapus) {
                echo "<script>
                    alert('Data petugas \"" . $petugas_data['nama_petugas'] . "\" berhasil dihapus');
                    window.location='index.php?page=petugas';
                </script>";
            } else {
                echo "<script>
                    alert('Error: " . mysqli_error($koneksi) . "');
                    window.location='index.php?page=petugas';
                </script>";
            }
        }
    } else {
        echo "<script>
            alert('Data petugas tidak ditemukan!');
            window.location='index.php?page=petugas';
        </script>";
    }
}
?>

<style>
    .modern-card {
        background: #ffffff;
        border-radius: 1.25rem;
        box-shadow: 0 6px 20px rgba(0,0,0,0.08);
        overflow: hidden;
        border: 1px solid #e5e7eb;
    }
    .modern-card .card-header {
        padding: 1rem 1.25rem;
        border: none;
        font-weight: 600;
        font-size: 1.15rem;
        letter-spacing: 0.3px;
        background: #0d6efd;
        color: #fff;
        border-radius: 1.25rem 1.25rem 0 0;
    }
    .modern-table {
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .modern-table thead {
        background: #0d6efd;
        color: #fff;
        font-size: 1rem;
        text-transform: uppercase;
    }
    .modern-table tbody tr {
        transition: all 0.25s ease;
    }
    .modern-table tbody tr:hover {
        background: #f0f8ff;
        box-shadow: inset 0 0 0 9999px rgba(135, 206, 235, 0.1);
    }
    .modern-table td, .modern-table th {
        vertical-align: middle;
        padding: 1rem 0.75rem;
        font-size: 0.98rem;
    }
    .modern-table .btn {
        border-radius: 0.75rem;
        font-size: 0.95rem;
        font-weight: 500;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .modern-table .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .modal-content {
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }
    .modal-header {
        border-bottom: none;
        padding: 1rem 1.25rem;
    }
    .modal-footer {
        border-top: none;
    }
</style>

<div class="container-fluid px-2 px-md-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-11 mt-4">
            <div class="card modern-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 d-flex align-items-center gap-2">
                        <i class="fas fa-users"></i> Data Petugas
                    </h4>
                </div>
            <div class="card-body bg-light">
            <a href="#" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahData">
                <i class="fas fa-plus me-2"></i>Tambah Data
            </a>
            <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content" style="background: #0d6efd; border: none;">
                                            <div class="modal-header" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
                                                <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                                                    <i class="fas fa-user-tie me-2"></i>Tambah Data Petugas
                                                </h1>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="" method="POST">
                                                <div class="modal-body" style="padding: 2rem;">
                                                    <div class="row mb-4">
                                                        <label class="col-md-3 col-form-label text-white fw-bold">Nama Lengkap</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="nama_petugas" class="form-control form-control-lg" placeholder="Masukan Nama Lengkap" required style="border-radius: 0.75rem;">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <label class="col-md-3 col-form-label text-white fw-bold">Username</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="username" class="form-control form-control-lg" placeholder="Masukan Username" required minlength="3" maxlength="20" pattern="[a-zA-Z0-9_]+" style="border-radius: 0.75rem;">
                                                            <div class="form-text text-white-50">Username hanya boleh huruf, angka, dan underscore</div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <label class="col-md-3 col-form-label text-white fw-bold">Password</label>
                                                        <div class="col-md-9">
                                                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Masukan Password" required minlength="6" style="border-radius: 0.75rem;">
                                                            <div class="form-text text-white-50">Password minimal 6 karakter</div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <label class="col-md-3 col-form-label text-white fw-bold">Telp</label>
                                                        <div class="col-md-9">
                                                            <input type="tel" name="telp" class="form-control form-control-lg" placeholder="Masukan Nomor Telepon" required pattern="[0-9]{10,15}" style="border-radius: 0.75rem;">
                                                            <div class="form-text text-white-50">Nomor telepon 10-15 digit</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="border-top: 1px solid rgba(255,255,255,0.2); padding: 1.5rem 2rem;">
                                                    <button type="button" class="btn btn-outline-light btn-lg px-4" data-bs-dismiss="modal">
                                                        <i class="fas fa-times me-2"></i>Batal
                                                    </button>
                                                    <button type="submit" name="kirim" class="btn btn-light btn-lg px-4" style="color: #0d6efd; font-weight: 600;">
                                                        <i class="fas fa-plus me-2"></i>Tambah Data
                                                    </button>
                                                </div>
                                            </form>

                                            <?php
                                            if (!isset($koneksi)) {
                                                include '../config/koneksi.php';
                                            }
                                            if (isset($_POST['kirim'])) {
                                                $nama = $_POST['nama_petugas'];
                                                $username = $_POST['username'];
                                                $password = md5($_POST['password']);
                                                $telp = $_POST['telp'];
                                                $level = 'petugas';
                                            
                                                $query = mysqli_query($koneksi, "INSERT INTO petugas VALUES ('','$nama','$username','$password','$telp','$level')");
                                                
                                                if ($query) {
                                                    echo "<script>
                                                        alert('Data berhasil ditambahkan');
                                                        window.location='index.php?page=petugas';
                                                    </script>";
                                                } else {
                                                    echo "<script>
                                                        alert('Error: " . mysqli_error($koneksi) . "');
                                                        window.location='index.php?page=petugas';
                                                    </script>";
                                                }
                                            }

                                            // Handle Edit Petugas
                                            if (isset($_POST['edit_petugas'])) {
                                                $id_petugas = mysqli_real_escape_string($koneksi, $_POST['id_petugas']);
                                                $nama_petugas = mysqli_real_escape_string($koneksi, $_POST['nama_petugas']);
                                                $username = mysqli_real_escape_string($koneksi, $_POST['username']);
                                                $telp = mysqli_real_escape_string($koneksi, $_POST['telp']);
                                                
                                                // Check if username already exists for other petugas
                                                $check_username = mysqli_query($koneksi, "SELECT id_petugas FROM petugas WHERE username='$username' AND id_petugas!='$id_petugas'");
                                                if (mysqli_num_rows($check_username) > 0) {
                                                    echo "<script>
                                                        alert('Username sudah digunakan oleh petugas lain');
                                                        window.location='index.php?page=petugas';
                                                    </script>";
                                                } else {
                                                    // Check if password is being updated
                                                    if (!empty($_POST['password'])) {
                                                        $password = md5($_POST['password']);
                                                        $query_edit = mysqli_query($koneksi, "UPDATE petugas SET 
                                                            nama_petugas='$nama_petugas', 
                                                            username='$username', 
                                                            password='$password', 
                                                            telp='$telp' 
                                                            WHERE id_petugas='$id_petugas'");
                                                    } else {
                                                        $query_edit = mysqli_query($koneksi, "UPDATE petugas SET 
                                                            nama_petugas='$nama_petugas', 
                                                            username='$username', 
                                                            telp='$telp' 
                                                            WHERE id_petugas='$id_petugas'");
                                                    }
                                                    
                                                    if ($query_edit) {
                                                        echo "<script>
                                                            alert('Data petugas berhasil diperbarui');
                                                            window.location='index.php?page=petugas';
                                                        </script>";
                                                    } else {
                                                        echo "<script>
                                                            alert('Error: " . mysqli_error($koneksi) . "');
                                                            window.location='index.php?page=petugas';
                                                        </script>";
                                                    }
                                                }
                                            }
                                            ?>
                                            </div>
                                        </div>
                                        </div>
                                        
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle mb-0 modern-table">
                        <thead class="text-center">
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>USERNAME</th>
                                <th>TELP</th>
                                <th>LEVEL</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        <?php
                        if (!isset($koneksi)) {
                            include '../config/koneksi.php';
                        }
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM petugas");
                        while($data = mysqli_fetch_array($query)) { ?>
                        <tr class="align-middle">
                            <td class="text-center fw-bold"><?php echo $no++; ?></td>
                            <td class="text-center"><?php echo htmlspecialchars($data['nama_petugas']); ?></td>
                            <td class="text-center"><?php echo htmlspecialchars($data['username']); ?></td>
                            <td class="text-center"><?php echo htmlspecialchars($data['telp']); ?></td>
                            <td class="text-center">
                                <span class="badge bg-primary"><?php echo ucfirst($data['level']); ?></span>
                            </td>
                                <td class="text-center">
                                <a href="#" class="btn btn-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['id_petugas']; ?>">
                                    <i class="fas fa-edit"></i> EDIT
                                </a>
                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id_petugas']; ?>">
                                    <i class="fas fa-trash"></i> HAPUS
                                </a>
                                                <!-- Modal hapus -->
                                                <div class="modal fade" id="hapus<?php echo $data['id_petugas']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <i class="fas fa-exclamation-triangle text-warning" style="font-size: 3rem;"></i>
                                                        <h4 class="mt-3">Konfirmasi Hapus Data</h4>
                                                        <p>Apakah Anda yakin akan menghapus data petugas:<br><strong><?php echo htmlspecialchars($data['nama_petugas']); ?></strong></p>
                                                        <p class="text-muted">Tindakan ini tidak dapat dibatalkan!</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                            <i class="fas fa-times me-2"></i>Batal
                                                        </button>
                                                        <a href="?page=petugas&aksi=hapus&id_petugas=<?php echo $data['id_petugas']; ?>" class="btn btn-danger">
                                                            <i class="fas fa-trash me-2"></i>Ya, Hapus
                                                        </a>
                                                    </div>
                                                    </div>
                                                </div> 
                                                </div>

                                                <!-- Modal Edit -->
                                                <div class="modal fade" id="edit<?php echo $data['id_petugas']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo $data['id_petugas']; ?>" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content" style="background: #0d6efd; border: none;">
                                                            <div class="modal-header" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
                                                                <h1 class="modal-title fs-5 text-white" id="editModalLabel<?php echo $data['id_petugas']; ?>">
                                                                    <i class="fas fa-edit me-2"></i>Edit Data Petugas
                                                                </h1>
                                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="" method="POST">
                                                                <input type="hidden" name="id_petugas" value="<?php echo $data['id_petugas']; ?>">
                                                                <input type="hidden" name="action" value="edit">
                                                                <div class="modal-body" style="padding: 2rem;">
                                                                    <div class="row mb-4">
                                                                        <label class="col-md-3 col-form-label text-white fw-bold">Nama Lengkap</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" name="nama_petugas" class="form-control form-control-lg" value="<?php echo htmlspecialchars($data['nama_petugas']); ?>" required style="border-radius: 0.75rem;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-4">
                                                                        <label class="col-md-3 col-form-label text-white fw-bold">Username</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" name="username" class="form-control form-control-lg" value="<?php echo htmlspecialchars($data['username']); ?>" required minlength="3" maxlength="20" pattern="[a-zA-Z0-9_]+" style="border-radius: 0.75rem;">
                                                                            <div class="form-text text-white-50">Username hanya boleh huruf, angka, dan underscore</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-4">
                                                                        <label class="col-md-3 col-form-label text-white fw-bold">Password</label>
                                                                        <div class="col-md-9">
                                                                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Kosongkan jika tidak ingin mengubah password" minlength="6" style="border-radius: 0.75rem;">
                                                                            <div class="form-text text-white-50">Kosongkan jika tidak ingin mengubah password</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-4">
                                                                        <label class="col-md-3 col-form-label text-white fw-bold">Telp</label>
                                                                        <div class="col-md-9">
                                                                            <input type="tel" name="telp" class="form-control form-control-lg" value="<?php echo htmlspecialchars($data['telp']); ?>" required pattern="[0-9]{10,15}" style="border-radius: 0.75rem;">
                                                                            <div class="form-text text-white-50">Nomor telepon 10-15 digit</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer" style="border-top: 1px solid rgba(255,255,255,0.2); padding: 1.5rem 2rem;">
                                                                    <button type="button" class="btn btn-outline-light btn-lg px-4" data-bs-dismiss="modal">
                                                                        <i class="fas fa-times me-2"></i>Batal
                                                                    </button>
                                                                    <button type="submit" name="edit_petugas" class="btn btn-light btn-lg px-4" style="color: #0d6efd; font-weight: 600;">
                                                                        <i class="fas fa-save me-2"></i>Simpan Perubahan
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                </td>
                        </tr>
                                        
                        <?php }?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>

<div style="margin-bottom: 4rem;"></div>

<script>
function confirmDelete(id, nama) {
    if (confirm('Apakah Anda yakin ingin menghapus petugas "' + nama + '"?\n\nTindakan ini tidak dapat dibatalkan!')) {
        window.location.href = 'hapus_petugas.php?id=' + id;
    }
}

// Add confirmation to existing delete links
document.addEventListener('DOMContentLoaded', function() {
    const deleteLinks = document.querySelectorAll('a[href*="aksi=hapus"]');
    deleteLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const href = this.href;
            if (confirm('Apakah Anda yakin ingin menghapus data petugas ini?\n\nTindakan ini tidak dapat dibatalkan!')) {
                window.location.href = href;
            }
        });
    });
});
</script>
