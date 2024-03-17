<?php
include '../app/views/layouts/header.php';
include '../app/views/layouts/sidebar.php';
?>

<div class="page-content">
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 540px;">
            <div class="card-header">
                <div class="d-flex justify-content-center">
                    <h5 class="card-title">EDIT BOOK</h5>
                </div>
            </div>
            <img src="<?= BASE_URL; ?>/img/<?= $data['buku']['cover']; ?>" class="card-img-top" alt="<?= $data['buku']['judul']; ?>">
            <form action="<?= BASE_URL; ?>/buku/edit/<?= $data['buku']['id']; ?>" method="post">
                <div class="card-body">
                    Judul:
                    <input type="text" name="judul" class="form-control" value="<?= $data['buku']['judul']; ?>" /><br>
                    Penulis:
                    <input type="text" name="penulis" class="form-control" value="<?= $data['buku']['penulis']; ?>" /><br>
                    Penerbit:
                    <input type="text" name="penerbit" class="form-control" value="<?= $data['buku']['penerbit']; ?>" /><br>
                    Tahun:
                    <input type="number" name="tahun" class="form-control" value="<?= $data['buku']['tahun']; ?>" /><br>
                    Summary:
                    <textarea name="summary" class="form-control"><?= $data['buku']['summary']; ?></textarea>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Edit Book</button>
                    <a class="btn btn-primary" href="<?= BASE_URL; ?>/buku" role="button">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../app/views/layouts/footer.php';
?>