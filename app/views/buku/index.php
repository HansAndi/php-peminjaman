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
                            <img src="<?= BASE_URL; ?>/img/buku/<?= $buku['cover']; ?>" class="card-img-top" alt="<?= $buku['judul']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $buku['judul']; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $buku['nama_penulis']; ?></h6>
                                <p class="card-text"><?= $buku['nama_penerbit']; ?></p>
                                <p class="card-text"><?= $buku['tahun']; ?></p>
                                <form action="<?= BASE_URL; ?>/peminjaman/pinjam" method="post" class="">
                                    <div class="d-flex justify-content-around">
                                        <?php if ($_SESSION['role'] == 'user') : ?>
                                            <input type="hidden" name="buku_id" value="<?= $buku['id']; ?>">
                                            <button type class="btn btn-sm btn-primary">Pinjam</button>
                                        <?php endif ?>
                                        <a class="btn btn-primary btn-lg" href="<?= BASE_URL; ?>/buku/detail/<?= $buku['id']; ?>" role="button"><i class="bi bi-book"></i></a>
                                        <?php if ($_SESSION['role'] == 'admin') : ?>
                                            <a class="btn btn-warning btn-lg editBuku" href="<?= BASE_URL; ?>/buku/edit/<?= $buku['id']; ?>" role="button"><i class="bi bi-pencil-square"></i></a>
                                            <a class="btn btn-danger btn-lg" href="<?= BASE_URL; ?>/buku/delete/<?= $buku['id']; ?>" role="button" onclick="return confirm('YAKIN?');"><i class="bi bi-trash-fill"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </form>
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
                        <label for="penulis_id">Penulis</label>
                        <select class="form-select" id="penulis_id" name="penulis_id">
                            <option disabled selected>Pilih Penulis</option>
                            <?php foreach ($data['penulis'] as $penulis) : ?>
                                <option value="<?= $penulis['id']; ?>"><?= $penulis['nama_penulis']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="penerbit_id">Penerbit</label>
                        <select class="form-select" id="penerbit_id" name="penerbit_id">
                            <option disabled selected>Pilih Penerbit</option>
                            <?php foreach ($data['penerbit'] as $penerbit) : ?>
                                <option value="<?= $penerbit['id']; ?>"><?= $penerbit['nama_penerbit']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kategori_id">Kategori</label>
                        <select class="form-select" id="kategori_id" name="kategori_id">
                            <option disabled selected>Pilih Kategori</option>
                            <?php foreach ($data['kategori'] as $kategori) : ?>
                                <option value="<?= $kategori['id']; ?>"><?= $kategori['nama_kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
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