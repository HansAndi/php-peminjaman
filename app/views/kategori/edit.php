<!-- Di dalam file edit.php -->
<div class="container">
    <h2>Edit Data Kategori</h2>
    <form action="<?= BASE_URL; ?>/kategori/edit/<?= $data['kategori']['id']; ?>" method="post">
        <div class="form-group">
            <label for="nama">Nama Kategori:</label>
            <input type="text" class="form-control" id="genre" name="genre" value="<?= $data['kategori']['genre']; ?>"
                required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>