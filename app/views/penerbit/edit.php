<!-- Di dalam file edit.php -->
<div class="container">
    <h2>Edit Data Penerbit</h2>
    <form action="<?= BASE_URL; ?>/penerbit/edit/<?= $data['penerbit']['id']; ?>" method="post">
        <div class="form-group">
            <label for="nama_penerbit">Nama Penerbit:</label>
            <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" value="<?= $data['penerbit']['nama_penerbit']; ?>"
                required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3"
                required><?= $data['penerbit']['alamat']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="no_hp">Nomor HP:</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $data['penerbit']['no_hp']; ?>"
                required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>