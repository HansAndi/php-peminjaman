<div class="container">
    <h2>Data Kategori</h2>
    <a href="<?= BASE_URL; ?>/kategori/tambah" class="btn btn-success mb-3">Tambah kategori</a>
    <table class="table text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['kategori'] as $kategori) : ?>
                <tr>
                    <td><?= $kategori['id']; ?></td>
                    <td><?= $kategori['nama_kategori']; ?></td>
                    <td>
                        <a href="<?= BASE_URL; ?>/kategori/edit/<?= $kategori['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= BASE_URL; ?>/kategori/delete/<?= $kategori['id']; ?>" class="btn btn-danger" onclick="return confirm('YAKIN?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>