<?php
include '../app/views/layouts/header.php';
include '../app/views/layouts/sidebar.php';
?>

<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title"></i>Data Penulis</h3>
                    <?php if ($_SESSION['role'] == 'admin') : ?>
                        <a href="<?= BASE_URL; ?>/penulis/tambah" class="btn btn-success mb-3 tambahPenulis" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Penulis</a>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data['penulis'] as $penulis) : ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $penulis['nama_penulis']; ?></td>
                                    <td><?= $penulis['jenis_kelamin']; ?></td>
                                    <td><?= $penulis['tanggal_lahir']; ?></td>
                                    <td>
                                        <a href="<?= BASE_URL; ?>/penulis/edit/<?= $penulis['id']; ?>" class="btn btn-warning editPenulis"><i class="bi bi-pencil-square"></i></a>
                                        <a href="<?= BASE_URL; ?>/penulis/delete/<?= $penulis['id']; ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" nama_penulisModal>Add Penulis</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="<?= BASE_URL; ?>/penulis/tambah" method="post">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="nama_penulis">Nama Penulis</label>
                        <input type="text" class="form-control" id="nama_penulis" name="nama_penulis">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tahun Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Penulis</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .ini {
        background-color: aqua;
        border-radius: 5px;
    }

    .breadcrumb-item {
        margin-left: 5px;
        ;
    }

    img {
        width: 100px;
        height: 300px;
    }
</style>

<?php
include '../app/views/layouts/footer.php';
?>