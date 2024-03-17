<!-- Di dalam file hapus.php -->
<div class="container">
    <h2>Hapus Data Kategori</h2>
    <p>Apakah Anda yakin ingin menghapus kategori ini?</p>
    <form action="<?= BASE_URL; ?>/kategori/delete/<?= $data['kategori']['id']; ?>" method="post" id="hapusForm"
        onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
        <button type="submit" class="btn btn-danger">Hapus</button>
        <a href="<?= BASE_URL; ?>/penerbit" class="btn btn-secondary">Batal</a>
    </form>
</div>