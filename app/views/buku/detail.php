<?php
include '../app/views/layouts/header.php';
include '../app/views/layouts/sidebar.php';
?>

<div class="page-content">
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 540px;">
            <div class="card-header">
                <div class="d-flex justify-content-center">
                    <h5 class="card-title"><?= $data['buku']['judul']; ?></h5>
                </div>
            </div>
            <img src="<?= BASE_URL; ?>/img/<?= $data['buku']['cover']; ?>" class="card-img-top" alt="<?= $data['buku']['judul']; ?>">
            <br>
            <div class="card-body">
                
                <h6 class="card-subtitle mb-2 text-muted"><?= $data['buku']['penulis']; ?></h6>
                <p class="card-text"><?= $data['buku']['penerbit']; ?></p>
                <p class="card-text"><?= $data['buku']['tahun']; ?></p>
                <p class="card-text"><?= $data['buku']['summary']; ?></p>
            </div>
            <a class="btn btn-primary btn-lg" href="<?= BASE_URL; ?>/buku" role="button">Kembali</a>
        </div>
    </div>
</div>

<style>
    .card-img-top {
        width: 50%;
    }

    img {
        align-self: center;
    }

    .card-body {
        text-align: center;
    }
</style>

<?php
include '../app/views/layouts/footer.php';
?>