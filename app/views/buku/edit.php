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
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['buku']['judul'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="penulis_id">Penulis</label>
                        <select class="form-select" id="penulis_id" name="penulis_id">
                            <option disabled selected>Pilih Penulis</option>
                            <?php foreach ($data['penulis'] as $penulis) : ?>
                                <option value="<?= $penulis['id']; ?>" <?php if ($penulis['id'] === $data['buku']['penulis_id']) echo 'selected'; ?>><?= $penulis['nama_penulis']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="penerbit_id">Penerbit</label>
                        <select class="form-select" id="penerbit_id" name="penerbit_id">
                            <option disabled selected>Pilih Penerbit</option>
                            <?php foreach ($data['penerbit'] as $penerbit) : ?>
                                <option value="<?= $penerbit['id']; ?>" <?php if ($penerbit['id'] === $data['buku']['penerbit_id']) echo 'selected'; ?>><?= $penerbit['nama_penerbit']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kategori_id">Kategori</label>
                        <select class="form-select" id="kategori_id" name="kategori_id">
                            <option disabled selected>Pilih Kategori</option>
                            <?php foreach ($data['kategori'] as $kategori) : ?>
                                <option value="<?= $kategori['id']; ?>" <?php if ($kategori['id'] === $data['buku']['kategori_id']) echo 'selected'; ?>><?= $kategori['nama_kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="number" class="form-control" id="tahun" name="tahun" value="<?= $data['buku']['tahun']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="summary">Summary</label>
                        <textarea class="form-control" id="summary" name="summary"><?= $data['buku']['summary']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="cover">Cover</label>
                        <input type="file" class="form-control-file" id="cover" name="cover">
                    </div>
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