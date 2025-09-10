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
    background: #e7f3ff;
    box-shadow: inset 0 0 0 9999px rgba(13, 110, 253, 0.1);
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
                        <i class="fas fa-user-graduate"></i> Data Mahasiswa
                    </h4>
                </div>
            <div class="card-body bg-light">
            <a href="#" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahData">
                <i class="fas fa-plus me-2"></i>Tambah Data
            </a>

                    <!-- Modal Tambah Data -->
                    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" style="background: #0d6efd; border: none;">
                                <div class="modal-header" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
                                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                                        <i class="fas fa-user-plus me-2"></i>Tambah Data Mahasiswa
                                    </h1>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="" method="POST">
                                    <div class="modal-body" style="padding: 2rem;">
                                        <div class="row mb-4">
                                            <label class="col-md-3 col-form-label text-white fw-bold">NIM</label>
                                            <div class="col-md-9">
                                                <input type="number" name="nim" class="form-control form-control-lg" placeholder="Masukan NIM" required minlength="8" maxlength="15" style="border-radius: 0.75rem;">
                                                <div class="form-text text-white-50">NIM harus 8-15 digit</div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 col-form-label text-white fw-bold">Nama Lengkap</label>
                                            <div class="col-md-9">
                                                <input type="text" name="nama" class="form-control form-control-lg" placeholder="Masukan Nama Lengkap" required style="border-radius: 0.75rem;">
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
                                    $nim = $_POST['nim'];
                                    $nama = $_POST['nama'];
                                    $username = $_POST['username'];
                                    $password = md5($_POST['password']);
                                    $telp = $_POST['telp'];
                                    $level = 'mahasiswa';

                                    $query = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES ('$nim','$nama','$username','$password','$telp','$level')");
                                    
                                    if ($query) {
                                        echo "<script>
                                            alert('Data berhasil ditambahkan');
                                            window.location='index.php?page=mahasiswa';
                                        </script>";
                                    } else {
                                        echo "<script>
                                            alert('Error: " . mysqli_error($koneksi) . "');
                                            window.location='index.php?page=mahasiswa';
                                        </script>";
                                    }
                                }

                                // Handle Edit Mahasiswa
                                if (isset($_POST['edit_mahasiswa'])) {
                                    $nim = mysqli_real_escape_string($koneksi, $_POST['nim']);
                                    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
                                    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
                                    $telp = mysqli_real_escape_string($koneksi, $_POST['telp']);
                                    $nim_lama = mysqli_real_escape_string($koneksi, $_POST['nim_lama']);
                                    
                                    // Check for duplicate NIM (except current record)
                                    $check_nim = mysqli_query($koneksi, "SELECT nim FROM mahasiswa WHERE nim='$nim' AND nim!='$nim_lama'");
                                    if (mysqli_num_rows($check_nim) > 0) {
                                        echo "<script>
                                            alert('NIM sudah digunakan oleh mahasiswa lain');
                                            window.location='index.php?page=mahasiswa';
                                        </script>";
                                    } else {
                                        // Check for duplicate username (except current record)
                                        $check_username = mysqli_query($koneksi, "SELECT username FROM mahasiswa WHERE username='$username' AND nim!='$nim_lama'");
                                        if (mysqli_num_rows($check_username) > 0) {
                                            echo "<script>
                                                alert('Username sudah digunakan oleh mahasiswa lain');
                                                window.location='index.php?page=mahasiswa';
                                            </script>";
                                        } else {
                                            // Check if password is being updated
                                            if (!empty($_POST['password'])) {
                                                $password = md5($_POST['password']);
                                                $query_edit = mysqli_query($koneksi, "UPDATE mahasiswa SET 
                                                    nim='$nim', 
                                                    nama='$nama', 
                                                    username='$username', 
                                                    password='$password', 
                                                    telp='$telp' 
                                                    WHERE nim='$nim_lama'");
                                            } else {
                                                $query_edit = mysqli_query($koneksi, "UPDATE mahasiswa SET 
                                                    nim='$nim', 
                                                    nama='$nama', 
                                                    username='$username', 
                                                    telp='$telp' 
                                                    WHERE nim='$nim_lama'");
                                            }
                                            
                                            if ($query_edit) {
                                                echo "<script>
                                                    alert('Data mahasiswa berhasil diperbarui');
                                                    window.location='index.php?page=mahasiswa';
                                                </script>";
                                            } else {
                                                echo "<script>
                                                    alert('Error: " . mysqli_error($koneksi) . "');
                                                    window.location='index.php?page=mahasiswa';
                                                </script>";
                                            }
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Tambah -->

                    <!-- Tabel Data Mahasiswa -->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle mb-0 modern-table">
                        <thead class="text-center">
                            <tr>
                                <th>NO</th>
                                <th>NIM</th>
                                <th>NAMA</th>
                                <th>USERNAME</th>
                                <th>TELP</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                                <?php
                                if (!isset($koneksi)) {
                                    include '../config/koneksi.php';
                                }
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                                while($data = mysqli_fetch_array($query)) { ?>
                        <tr class="align-middle">
                            <td class="text-center fw-bold"><?php echo $no++; ?></td>
                            <td class="text-center"><?php echo htmlspecialchars($data['nim']); ?></td>
                            <td class="text-center"><?php echo htmlspecialchars($data['nama']); ?></td>
                            <td class="text-center"><?php echo htmlspecialchars($data['username']); ?></td>
                            <td class="text-center"><?php echo htmlspecialchars($data['telp']); ?></td>
                                <td class="text-center">
                                <a href="#" class="btn btn-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['nim']?>">
                                    <i class="fas fa-edit"></i> EDIT
                                </a>
                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['nim']?>">
                                    <i class="fas fa-trash"></i> HAPUS
                                </a>

                                            <!-- Modal Hapus -->
                                            <div class="modal fade" id="hapus<?php echo $data['nim']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5">Hapus Data</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="edit_data.php" method="POST">
                                                                <input type="hidden" name="nim" value="<?php echo $data['nim']?>">
                                                                <p>Apakah Yakin Akan Menghapus Data <br><strong><?php echo $data['nama']?></strong> ?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" name="hapus_mahasiswa" class="btn btn-danger">Hapus</button>
                                                        </div>
                                                            </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Modal Hapus -->

                                            <!-- Modal Edit -->
                                            <div class="modal fade" id="edit<?php echo $data['nim']?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo $data['nim']?>" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content" style="background: #0d6efd; border: none;">
                                                        <div class="modal-header" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
                                                            <h1 class="modal-title fs-5 text-white" id="editModalLabel<?php echo $data['nim']?>">
                                                                <i class="fas fa-edit me-2"></i>Edit Data Mahasiswa
                                                            </h1>
                                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="" method="POST">
                                                            <input type="hidden" name="nim_lama" value="<?php echo $data['nim']?>">
                                                            <div class="modal-body" style="padding: 2rem;">
                                                                <div class="row mb-4">
                                                                    <label class="col-md-3 col-form-label text-white fw-bold">NIM</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" name="nim" class="form-control form-control-lg" value="<?php echo htmlspecialchars($data['nim'])?>" required minlength="8" maxlength="15" style="border-radius: 0.75rem;">
                                                                        <div class="form-text text-white-50">NIM harus 8-15 digit</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-4">
                                                                    <label class="col-md-3 col-form-label text-white fw-bold">Nama Lengkap</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="nama" class="form-control form-control-lg" value="<?php echo htmlspecialchars($data['nama'])?>" required style="border-radius: 0.75rem;">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-4">
                                                                    <label class="col-md-3 col-form-label text-white fw-bold">Username</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="username" class="form-control form-control-lg" value="<?php echo htmlspecialchars($data['username'])?>" required minlength="3" maxlength="20" pattern="[a-zA-Z0-9_]+" style="border-radius: 0.75rem;">
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
                                                                        <input type="tel" name="telp" class="form-control form-control-lg" value="<?php echo htmlspecialchars($data['telp'])?>" required pattern="[0-9]{10,15}" style="border-radius: 0.75rem;">
                                                                        <div class="form-text text-white-50">Nomor telepon 10-15 digit</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer" style="border-top: 1px solid rgba(255,255,255,0.2); padding: 1.5rem 2rem;">
                                                                <button type="button" class="btn btn-outline-light btn-lg px-4" data-bs-dismiss="modal">
                                                                    <i class="fas fa-times me-2"></i>Batal
                                                                </button>
                                                                <button type="submit" name="edit_mahasiswa" class="btn btn-light btn-lg px-4" style="color: #0d6efd; font-weight: 600;">
                                                                    <i class="fas fa-save me-2"></i>Simpan Perubahan
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Modal Edit -->

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Tabel -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Spacing -->
<div style="margin-bottom: 4rem;"></div>
