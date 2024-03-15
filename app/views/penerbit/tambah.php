<!-- Di dalam file tambah.php -->
<div class="container">
    <h2>Tambah Data Penerbit</h2>
    <form action="<?= BASE_URL; ?>/penerbit/tambah" method="post">
        <div class="form-group">
            <label for="nama">Nama Penerbit:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="no_hp">Nomor HP:</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>