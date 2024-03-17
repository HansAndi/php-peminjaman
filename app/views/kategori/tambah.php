<!-- Di dalam file tambah.php -->
<div class="container">
    <h2>Tambah Data Kategori</h2>
    <form action="<?= BASE_URL; ?>/kategori/tambah" method="post">
        <div class="form-group">
            <label for="nama">Nama Genre:</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>