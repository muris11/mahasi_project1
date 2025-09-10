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
    .modern-table .badge {
        font-size: 0.95rem;
        padding: 0.5rem 0.8rem;
        border-radius: 1rem;
        letter-spacing: 0.4px;
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
                        <i class="fas fa-comments"></i> Data Tanggapan
                    </h4>
                </div>
                <div class="card-body bg-light">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle mb-0 modern-table">
                            <thead class="text-center">
                                <tr>
                                    <th>NO</th>
                                    <th>TANGGAL</th>
                                    <th>NIM</th>
                                    <th>JUDUL</th>
                                    <th>TANGGAPAN</th>
                                    <th>STATUS</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                if (!isset($koneksi)) {
                                    include '../config/koneksi.php';
                                }
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT a.*, b.* FROM tanggapan a INNER JOIN pengaduan b ON a.id_pengaduan=b.id_pengaduan");
                                while($data = mysqli_fetch_array($query)) { ?>
                                    <tr class="align-middle">
                                        <td class="text-center fw-bold"><?php echo $no++; ?></td>
                                        <td class="text-center text-nowrap"><?php echo date('d/m/Y', strtotime($data['tgl_tanggapan'])); ?></td>
                                        <td class="text-center"><?php echo htmlspecialchars($data['nim']); ?></td>
                                        <td>
                                            <div class="text-truncate" style="max-width: 180px;" title="<?php echo htmlspecialchars($data['judul_laporan']); ?>">
                                                <?php echo htmlspecialchars($data['judul_laporan']); ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="overflow-auto" style="max-width: 250px;" title="<?php echo htmlspecialchars($data['tanggapan']); ?>">
                                                <?php echo htmlspecialchars($data['tanggapan']); ?>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <?php
                                            if ($data['status'] == 'proses') {
                                                echo "<span class='badge bg-warning'>Proses</span>";
                                            } elseif ($data['status'] == 'selesai') {
                                                echo "<span class='badge bg-success'>Selesai</span>";
                                            } else {
                                                echo "<span class='badge bg-danger'>Menunggu</span>";
                                            }
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id_tanggapan']?>">
                                                <i class="fas fa-trash"></i> HAPUS
                                            </a>

                                            <!-- Modal Hapus -->
                                            <div class="modal fade" id="hapus<?php echo $data['id_tanggapan']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="edit_data.php" method="POST">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="id_tanggapan" value="<?php echo $data['id_tanggapan']?>">
                                                                <p>Apakah yakin akan menghapus tanggapan untuk laporan:<br>
                                                                <strong><?php echo htmlspecialchars($data['judul_laporan']); ?></strong> ?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="hapus_tanggapan" class="btn btn-danger">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div> <!-- table-responsive -->
                </div> <!-- card-body -->
            </div> <!-- card -->
        </div>
    </div>
</div>

<!-- Footer Spacing -->
<div style="margin-bottom: 4rem;"></div>
