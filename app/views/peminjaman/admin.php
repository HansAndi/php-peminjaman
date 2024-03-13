<?php
include '../app/views/layouts/header.php';
include '../app/views/layouts/sidebar.php';
?>

<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title"></i>Data Peminjaman</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover custom-table text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User</th>
                            <th>Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data['peminjaman'] as $peminjaman) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $peminjaman['username']; ?></td>
                                <td><?= $peminjaman['judul']; ?></td>
                                <td><?= date('d-m-Y', strtotime($peminjaman['tanggal_pinjam'])); ?></td>
                                <td>
                                    <?php if ($peminjaman['tanggal_kembali'] == null) {
                                        echo '-';
                                    } else {
                                        echo date('d-m-Y', strtotime($peminjaman['tanggal_kembali']));
                                    } ?>
                                </td>
                                <td>
                                    <?php if ($peminjaman['status_peminjaman'] == 1) {
                                        echo 'Belum Kembali';
                                    } else {
                                        echo 'Sudah Kembali';
                                    } ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include '../app/views/layouts/footer.php';
?>