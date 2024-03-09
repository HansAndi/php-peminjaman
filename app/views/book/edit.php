<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 540px;">
        <div class="card-header">
            <div class="d-flex justify-content-center">
                <h5 class="card-title">EDIT BOOK</h5>
            </div>
        </div>
        <img src="<?= BASE_URL; ?>/img/<?= $data['book']['cover']; ?>" class="card-img-top" alt="<?= $data['book']['judul']; ?>">
        <form action="<?= BASE_URL; ?>/book/edit/<?= $data['book']['id']; ?>" method="post">
            <div class="card-body">
                Judul: 
                <input type="text" name="judul" class="form-control" value="<?= $data['book']['judul']; ?>" /><br>
                Penulis:
                <input type="text" name="penulis" class="form-control" value="<?= $data['book']['penulis']; ?>" /><br>
                Penerbit:
                <input type="text" name="penerbit" class="form-control" value="<?= $data['book']['penerbit']; ?>" /><br>
                Tahun:
                <input type="text" name="tahun" class="form-control" value="<?= $data['book']['tahun']; ?>" /><br>
                Summary:
                <textarea name="summary" class="form-control"><?= $data['book']['summary']; ?></textarea>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Edit Book</button>
                <a class="btn btn-primary" href="<?= BASE_URL; ?>/book" role="button">Kembali</a>
            </div>
        </form>
    </div>
</div>