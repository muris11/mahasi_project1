<?php
include '../config/koneksi.php';

// Proses Verifikasi
if (isset($_POST['kirim_tanggapan'])) {
    $id_pengaduan = $_POST['id_pengaduan'];
    $status = $_POST['status'];

    // Pastikan hanya dua kemungkinan status
    if ($status == 'proses' || $status == 'ditolak') {
        $query = mysqli_query($koneksi, "UPDATE pengaduan SET status='$status' WHERE id_pengaduan='$id_pengaduan'");
        if ($query) {
            if ($status == 'proses') {
                $pesan = "Pengaduan diterima dan diproses";
            } else {
                $pesan = "Pengaduan berhasil ditolak";
            }
            echo "<script>
                alert('$pesan');
                window.location='index.php?page=pengaduan';
            </script>";
        } else {
            echo "<script>
                alert('Error: " . mysqli_error($koneksi) . "');
                window.location='index.php?page=pengaduan';
            </script>";
        }
    }
}

// Proses Tanggapan
if (isset($_POST['kirim'])) {
    $id_pengaduan = $_POST['id_pengaduan'];
    $id_petugas = $_SESSION['id_petugas'];
    $tanggal = date("Y-m-d");
    $tanggapan = htmlspecialchars($_POST['tanggapan']);

    $query = mysqli_query($koneksi, "INSERT INTO tanggapan VALUES ('','$id_pengaduan','$tanggal','$tanggapan','$id_petugas')");
    if ($query && !empty($tanggapan)) {
        $update = mysqli_query($koneksi, "UPDATE pengaduan SET status='selesai' WHERE id_pengaduan='$id_pengaduan' ");
        echo "<script>
            alert('Data berhasil ditanggapi');
            window.location='index.php?page=pengaduan';
        </script>";
    } else {
        echo "<script>
            alert('Error: " . mysqli_error($koneksi) . "');
            window.location='index.php?page=pengaduan';
        </script>";
    }
    
}

// Handle actions
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'hapus' && isset($_GET['id_pengaduan'])) {
        $id_pengaduan = mysqli_real_escape_string($koneksi, $_GET['id_pengaduan']);
        $hapus = mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
        if ($hapus) {
            echo "<script>
                alert('Pengaduan berhasil dihapus');
                window.location='index.php?page=pengaduan';
            </script>";
        } else {
            echo "<script>
                alert('Error: " . mysqli_error($koneksi) . "');
                window.location='index.php?page=pengaduan';
            </script>";
        }
    } elseif ($_GET['aksi'] == 'tanggapi' && isset($_GET['id_pengaduan'])) {
        $id_pengaduan = mysqli_real_escape_string($koneksi, $_GET['id_pengaduan']);
        $tanggapi = mysqli_query($koneksi, "UPDATE pengaduan SET status='proses' WHERE id_pengaduan='$id_pengaduan'");
        if ($tanggapi) {
            echo "<script>
                alert('Pengaduan berhasil disetujui dan sedang diproses');
                window.location='index.php?page=pengaduan';
            </script>";
        } else {
            echo "<script>
                alert('Error: " . mysqli_error($koneksi) . "');
                window.location='index.php?page=pengaduan';
            </script>";
        }
    } elseif ($_GET['aksi'] == 'tolak' && isset($_GET['id_pengaduan'])) {
        $id_pengaduan = mysqli_real_escape_string($koneksi, $_GET['id_pengaduan']);
        $tolak = mysqli_query($koneksi, "UPDATE pengaduan SET status='ditolak' WHERE id_pengaduan='$id_pengaduan'");
        if ($tolak) {
            echo "<script>
                alert('Pengaduan berhasil ditolak');
                window.location='index.php?page=pengaduan';
            </script>";
        } else {
            echo "<script>
                alert('Error: " . mysqli_error($koneksi) . "');
                window.location='index.php?page=pengaduan';
            </script>";
        }
    }
}
?>

<style>
    .modern-card {
        background: #ffffff;
        border-radius: 1.25rem;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        border: 1px solid #e5e7eb;
    }

    .modern-card .card-header {
        padding: 1rem 1.25rem;
        border: none;
        font-weight: 600;
        font-size: 1.15rem;
        letter-spacing: 0.3px;
        background: linear-gradient(90deg, #2563eb, #3b82f6);
        color: #fff;
        border-radius: 1.25rem 1.25rem 0 0;
    }

    .modern-table {
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .modern-table thead {
        background: linear-gradient(90deg, #2563eb, #3b82f6);
        color: #fff;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .modern-table tbody tr {
        transition: all 0.25s ease;
    }

    .modern-table tbody tr:hover {
        background: #f1f5f9;
        box-shadow: inset 0 0 0 9999px rgba(59, 130, 246, 0.05);
    }

    .modern-table td,
    .modern-table th {
        vertical-align: middle;
        padding: 1rem 0.75rem;
        font-size: 0.98rem;
    }

    .modern-table img.img-thumbnail {
        border-radius: 0.75rem;
        border: 2px solid #3b82f6;
        transition: transform 0.2s ease;
    }

    .modern-table img.img-thumbnail:hover {
        transform: scale(1.1);
    }

    .modern-table .btn {
        border-radius: 0.75rem;
        font-size: 0.95rem;
        font-weight: 500;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .modern-table .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .modern-table .badge {
        font-size: 0.95rem;
        padding: 0.5rem 0.8rem;
        border-radius: 1rem;
        letter-spacing: 0.4px;
    }

    .modal-content {
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .modal-header {
        border-bottom: none;
        padding: 1rem 1.25rem;
    }

    .modal-footer {
        border-top: none;
    }

    .status-badge {
        font-size: 0.85rem;
        font-weight: 600;
        padding: 0.5rem 0.8rem;
        border-radius: 0.5rem;
    }

    .btn-action {
        border-radius: 0.5rem;
        font-size: 0.85rem;
        font-weight: 600;
        padding: 0.4rem 0.8rem;
        margin: 0.1rem;
    }

    .action-buttons {
        white-space: nowrap;
    }
</style>

<div class="container-fluid px-2 px-md-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-11 mt-4">
            <div class="card modern-card">
                <!-- Header -->
                <div class="card-header bg-gradient bg-primary text-white d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 d-flex align-items-center gap-2">
                        <i class="fas fa-table"></i> Data Pengaduan
                    </h4>
                    <a href="export_tanggapan.php"
                        class="btn btn-success btn-sm d-flex align-items-center gap-2 shadow-sm"
                        target="_blank"
                        aria-label="Export Excel"
                        data-bs-toggle="tooltip"
                        title="Export ke Excel">
                        <i class="fas fa-download"></i> <span class="d-none d-md-inline">Export Excel</span>
                    </a>
                </div>

                <!-- Body -->
                <div class="card-body bg-light">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle mb-0 modern-table">
                            <thead class="text-center">
                                <tr>
                                    <th>NO</th>
                                    <th>TANGGAL</th>
                                    <th>NAMA</th>
                                    <th>JUDUL</th>
                                    <th>LAPORAN</th>
                                    <th>FOTO</th>
                                    <th>STATUS</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                include '../config/koneksi.php';
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT a.*, b.* FROM pengaduan a INNER JOIN mahasiswa b ON a.nim=b.nim ORDER BY id_pengaduan DESC");
                                while ($data = mysqli_fetch_array($query)) { ?>
                                    <tr class="align-middle">
                                        <td class="text-center fw-bold"><?php echo $no++; ?></td>
                                        <td class="text-center text-nowrap"><?php echo date('d/m/Y', strtotime($data['tgl_pengaduan'])); ?></td>
                                        <td class="text-center text-wrap" style="max-width:120px;"><?php echo htmlspecialchars($data['nama']); ?></td>
                                        <td>
                                            <div class="text-truncate" style="max-width: 180px;" title="<?php echo htmlspecialchars($data['judul_laporan']); ?>">
                                                <?php echo htmlspecialchars($data['judul_laporan']); ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="overflow-auto" style="max-width: 220px;" title="<?php echo htmlspecialchars($data['isi_laporan']); ?>">
                                                <?php echo htmlspecialchars($data['isi_laporan']); ?>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <img src="../bootstrap/img/<?php echo $data['foto']; ?>"
                                                class="img-thumbnail border border-2"
                                                style="width: 70px; height: 70px; object-fit: cover; cursor: pointer;"
                                                alt="Foto Pengaduan dari <?php echo htmlspecialchars($data['nama']); ?> "
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalFoto<?php echo $data['id_pengaduan']; ?>">
                                            <!-- Modal Foto Preview -->
                                            <div class="modal fade" id="modalFoto<?php echo $data['id_pengaduan']; ?>" tabindex="-1" aria-labelledby="modalFotoLabel<?php echo $data['id_pengaduan']; ?>" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalFotoLabel<?php echo $data['id_pengaduan']; ?>">Foto Pengaduan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <img src="../bootstrap/img/<?php echo $data['foto']; ?>" class="img-fluid rounded shadow" alt="Foto Pengaduan" style="max-height:350px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
    <?php
    if ($data['status'] == 'proses') {
        echo "<span class='badge bg-warning text-dark'>Proses</span>";
    } elseif ($data['status'] == 'selesai') {
        echo "<span class='badge bg-success'>Selesai</span>";
    } elseif ($data['status'] == 'ditolak') {
        echo "<span class='badge bg-danger'>Ditolak</span>"; // ✅ warna merah untuk ditolak
    } else {
        echo "<span class='badge bg-secondary'>Menunggu</span>";
    }
    ?>
</td>
                                        <td class="text-center">
                                            <div class="btn-group-vertical gap-1" role="group">
                                                <?php if ($data['status'] == '0' || $data['status'] == 0): ?>
                                                    <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#verifikasi<?php echo $data['id_pengaduan'] ?>" aria-label="Verifikasi">
                                                        <i class="fas fa-check"></i> <span class="d-none d-md-inline">Verifikasi</span>
                                                    </a>
                                                    <!-- Modal Verifikasi -->
                                                    <div class="modal fade" id="verifikasi<?php echo $data['id_pengaduan'] ?>" tabindex="-1" aria-labelledby="verifikasiLabel<?php echo $data['id_pengaduan'] ?>" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-primary text-white">
                                                                    <h5 class="modal-title" id="verifikasiLabel<?php echo $data['id_pengaduan'] ?>">Verifikasi Pengaduan</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form action="" method="POST">
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="id_pengaduan" value="<?php echo $data['id_pengaduan'] ?>">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"><strong>Pilih Status Verifikasi:</strong></label>
                                                                            <select class="form-select" name="status" required>
                                                                                <option value="">-- Pilih Status --</option>
                                                                                <option value="proses">✅ Terima & Proses</option>
                                                                                <option value="ditolak">❌ Tolak Pengaduan</option>
                                                                            </select>
                                                                            <small class="form-text text-muted">Pilih "Terima & Proses" untuk menerima pengaduan atau "Tolak" untuk menolak.</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit" name="kirim_tanggapan" class="btn btn-primary"><i class="fas fa-check"></i> Verifikasi</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if ($data['status'] == 'proses'): ?>
                                                    <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#tanggapi<?php echo $data['id_pengaduan'] ?>" aria-label="Tanggapi">
                                                        <i class="fas fa-reply"></i> <span class="d-none d-md-inline">Tanggapi</span>
                                                    </a>
                                                    <!-- Modal Tanggapi -->
                                                    <div class="modal fade" id="tanggapi<?php echo $data['id_pengaduan'] ?>" tabindex="-1" aria-labelledby="tanggapiLabel<?php echo $data['id_pengaduan'] ?>" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-success text-white">
                                                                    <h5 class="modal-title" id="tanggapiLabel<?php echo $data['id_pengaduan'] ?>">Tanggapi Pengaduan</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form action="" method="POST">
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="id_pengaduan" value="<?php echo $data['id_pengaduan'] ?>">
                                                                        <div class="mb-3">
                                                                            <label class="form-label"><strong>Tanggapan:</strong></label>
                                                                            <textarea name="tanggapan" class="form-control" rows="4" placeholder="Tulis tanggapan Anda di sini..." required></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit" name="kirim" class="btn btn-success"><i class="fas fa-paper-plane"></i> Kirim Tanggapan</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if ($data['status'] == 'selesai'): ?>
                                                    <span class="btn btn-outline-success btn-sm disabled">
                                                        <i class="fas fa-check-circle"></i> <span class="d-none d-md-inline">Selesai</span>
                                                    </span>
                                                <?php endif; ?>
                                                <a href="#" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detail<?php echo $data['id_pengaduan'] ?>" aria-label="Detail">
                                                    <i class="fas fa-eye"></i> <span class="d-none d-md-inline">Detail</span>
                                                </a>
                                                <!-- Modal Detail -->
                                                <div class="modal fade" id="detail<?php echo $data['id_pengaduan'] ?>" tabindex="-1" aria-labelledby="detailLabel<?php echo $data['id_pengaduan'] ?>" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-info text-white">
                                                                <h5 class="modal-title" id="detailLabel<?php echo $data['id_pengaduan'] ?>">Detail Pengaduan</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <table class="table table-borderless">
                                                                            <tr>
                                                                                <td><strong>Tanggal:</strong></td>
                                                                                <td><?php echo date('d/m/Y', strtotime($data['tgl_pengaduan'])); ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><strong>NIM:</strong></td>
                                                                                <td><?php echo $data['nim']; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><strong>Nama:</strong></td>
                                                                                <td><?php echo $data['nama']; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><strong>Status:</strong></td>
                                                                                <td>
                                                                                    <?php
                                                                                    if ($data['status'] == 'proses') {
                                                                                        echo "<span class='badge bg-warning text-dark'>Proses</span>";
                                                                                    } elseif ($data['status'] == 'selesai') {
                                                                                        echo "<span class='badge bg-success'>Selesai</span>";
                                                                                    } elseif ($data['status'] == 'ditolak') {
                                                                                        echo "<span class='badge bg-danger'>Ditolak</span>";
                                                                                    } else {
                                                                                        echo "<span class='badge bg-secondary'>Menunggu</span>";
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="text-center">
                                                                            <img src="../bootstrap/img/<?php echo $data['foto']; ?>" class="img-fluid rounded" style="max-height: 200px;" alt="Foto Pengaduan">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-12">
                                                                        <h6><strong>Judul Laporan:</strong></h6>
                                                                        <p class="border p-2 bg-light"><?php echo htmlspecialchars($data['judul_laporan']); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <h6><strong>Isi Laporan:</strong></h6>
                                                                        <p class="border p-3 bg-light" style="min-height: 100px;"><?php echo nl2br(htmlspecialchars($data['isi_laporan'])); ?></p>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                                $check_tanggapan = mysqli_query($koneksi, "SELECT t.*, p.nama_petugas FROM tanggapan t INNER JOIN petugas p ON t.id_petugas = p.id_petugas WHERE t.id_pengaduan = '" . $data['id_pengaduan'] . "'");
                                                                if (mysqli_num_rows($check_tanggapan) > 0) {
                                                                    $tanggapan_data = mysqli_fetch_assoc($check_tanggapan);
                                                                ?>
                                                                    <div class="row mt-3">
                                                                        <div class="col-12">
                                                                            <div class="alert alert-success">
                                                                                <h6><strong><i class="fas fa-reply"></i> Tanggapan:</strong></h6>
                                                                                <p class="mb-2"><?php echo nl2br(htmlspecialchars($tanggapan_data['tanggapan'])); ?></p>
                                                                                <small class="text-muted">
                                                                                    <i class="fas fa-user"></i> <?php echo $tanggapan_data['nama_petugas']; ?> |
                                                                                    <i class="fas fa-calendar"></i> <?php echo date('d/m/Y', strtotime($tanggapan_data['tgl_tanggapan'])); ?>
                                                                                </small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if ($_SESSION['login'] == 'admin'): ?>
                                                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id_pengaduan'] ?>" aria-label="Hapus">
                                                        <i class="fas fa-trash"></i> <span class="d-none d-md-inline">Hapus</span>
                                                    </a>
                                                    <!-- Modal Hapus -->
                                                    <div class="modal fade" id="hapus<?php echo $data['id_pengaduan'] ?>" tabindex="-1" aria-labelledby="hapusLabel<?php echo $data['id_pengaduan'] ?>" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger text-white">
                                                                    <h5 class="modal-title" id="hapusLabel<?php echo $data['id_pengaduan'] ?>">Hapus Data</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form action="edit_data.php" method="POST">
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="id_pengaduan" value="<?php echo $data['id_pengaduan'] ?>">
                                                                        <div class="alert alert-warning">
                                                                            <i class="fas fa-exclamation-triangle"></i>
                                                                            <strong>Peringatan!</strong> Apakah Anda yakin akan menghapus pengaduan berikut?
                                                                        </div>
                                                                        <p><strong>Judul:</strong> <?php echo htmlspecialchars($data['judul_laporan']); ?></p>
                                                                        <p><strong>Pelapor:</strong> <?php echo htmlspecialchars($data['nama']); ?></p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit" name="hapus_pengaduan" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Spacing -->
<div style="margin-bottom: 4rem;"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });

    // Enhanced confirmation for reject action
    function confirmReject(id) {
        if (confirm('Apakah Anda yakin ingin menolak pengaduan ini?\n\nPengaduan yang ditolak tidak dapat diproses kembali!')) {
            window.location.href = '?page=pengaduan&aksi=tolak&id_pengaduan=' + id;
        }
    }

    // Enhanced confirmation for approve action
    function confirmApprove(id) {
        if (confirm('Apakah Anda yakin ingin menyetujui pengaduan ini?\n\nPengaduan akan masuk ke tahap proses.')) {
            window.location.href = '?page=pengaduan&aksi=tanggapi&id_pengaduan=' + id;
        }
    }

    // Enhanced confirmation for delete action
    function confirmDelete(id) {
        if (confirm('Apakah Anda yakin ingin menghapus pengaduan ini?\n\nTindakan ini tidak dapat dibatalkan!')) {
            window.location.href = '?page=pengaduan&aksi=hapus&id_pengaduan=' + id;
        }
    }
</script>