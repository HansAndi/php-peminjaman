<?php
include '../app/views/layouts/header.php';
include '../app/views/layouts/sidebar.php';
?>

<div class="row">
    <div class="col-md-4 mt-4">
        <?php Flasher::flash(); ?>
    </div>
</div>

<div class="page-cotent">
    <section class="row">
        <div class="col-12">

            <?php if ($_SESSION['role'] == 'admin') : ?>
                <button type="button" class="btn btn-success tambahBuku" data-bs-toggle="modal" data-bs-target="#formModal">
                    <strong>+</strong> Add Book
                </button>
            <?php endif; ?>

            <div class="row">
                <?php foreach ($data['buku'] as $buku) : ?>
                    <div class="col-md-4 mt-4">
                        <div class="card" style="width: 18rem;">
                            <img src="<?= BASE_URL; ?>/img/<?= $buku['cover']; ?>" class="card-img-top" alt="<?= $buku['judul']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $buku['judul']; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $buku['penulis']; ?></h6>
                                <p class="card-text"><?= $buku['penerbit']; ?></p>
                                <p class="card-text"><?= $buku['tahun']; ?></p>
                                <a class="btn btn-primary btn-lg mb-2" href="<?= BASE_URL; ?>/buku/detail/<?= $buku['id']; ?>" role="button">Detail</a><br>
                                <?php if ($_SESSION['role'] == 'admin') : ?>
                                    <a class="btn btn-warning btn-lg mb-2 editBuku" href="<?= BASE_URL; ?>/buku/edit/<?= $buku['id']; ?>" role="button"><i class="bi bi-pencil-square"></i></a><br>
                                    <a class="btn btn-danger btn-lg" href="<?= BASE_URL; ?>/buku/delete/<?= $buku['id']; ?>" role="button" onclick="return confirm('YAKIN?');"><i class="bi bi-trash-fill"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <br>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Add Book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="<?= BASE_URL; ?>/buku/tambah" method="post">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis">
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit">
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="number" class="form-control" id="tahun" name="tahun">
                    </div>
                    <div class="form-group">
                        <label for="summary">Summary</label>
                        <textarea class="form-control" id="summary" name="summary"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cover">Cover</label>
                        <input type="file" class="form-control-file" id="cover" name="cover">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Book</button>
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