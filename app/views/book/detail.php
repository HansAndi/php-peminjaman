<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 540px;">
        <div class="card-header">
            <div class="d-flex justify-content-center">
                <h5 class="card-title"><?= $data['book']['judul']; ?></h5>
            </div>
        </div>
        <img src="<?= BASE_URL; ?>/img/<?= $data['book']['cover']; ?>" class="card-img-top" alt="<?= $data['book']['judul']; ?>">
        <br>
        <div class="card-body">
            
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['book']['penulis']; ?></h6>
            <p class="card-text"><?= $data['book']['penerbit']; ?></p>
            <p class="card-text"><?= $data['book']['tahun']; ?></p>
            <p class="card-text"><?= $data['book']['summary']; ?></p>
        </div>
        <a class="btn btn-primary btn-lg" href="<?= BASE_URL; ?>/book" role="button">Kembali</a>
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