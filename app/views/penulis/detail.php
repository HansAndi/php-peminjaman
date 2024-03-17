<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 540px;">
        <div class="card-header">
            <div class="d-flex justify-content-center">
                <h5 class="card-title"><?= $data['penulis']['nama_penulis']; ?></h5>
            </div>
        </div>
        
        <br>
        <div class="card-body">
            <p class="card-text"><?= $data['penulis']['jenis_kelamin']; ?></p>
            <p class="card-text"><?= $data['penulis']['tahun_lahir']; ?></p>
            <p class="card-text"><?= $data['penulis']['email']; ?></p>
            <p class="card-text"><?= $data['penulis']['judul_buku']; ?></p>
        </div>
        <a class="btn btn-primary btn-lg" href="<?= BASE_URL; ?>/penulis" role="button">Kembali</a>
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