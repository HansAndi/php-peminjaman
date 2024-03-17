<div class="page-cotent mb-5">
    <h2>Data Penulis</h2>
    <a href="<?= BASE_URL; ?>/penulis/tambah" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Penulis</a>
    <table class="table">
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
            <?php foreach ($data['penulis'] as $penulis) : ?>
                <tr>
                    <td><?= $penulis['id']; ?></td>
                    <td><?= $penulis['nama_penulis']; ?></td>
                    <td><?= $penulis['jenis_kelamin']; ?></td>
                    <td><?= $penulis['tanggal_lahir']; ?></td>
                    <td>
                        <a href="<?= BASE_URL; ?>/penulis/edit/<?= $penulis['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= BASE_URL; ?>/penulis/delete/<?= $penulis['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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