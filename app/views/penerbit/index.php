<div class="container">
    <h2>Data Penerbit</h2>
    <a href="<?= BASE_URL; ?>/penerbit/tambah" class="btn btn-success mb-3">Tambah Penerbit</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['penerbit'] as $penerbit) : ?>
            <tr>
                <td><?= $penerbit['id']; ?></td>
                <td><?= $penerbit['nama']; ?></td>
                <td><?= $penerbit['alamat']; ?></td>
                <td><?= $penerbit['no_hp']; ?></td>
                <td>
                    <a href="<?= BASE_URL; ?>/penerbit/edit/<?= $penerbit['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="<?= BASE_URL; ?>/penerbit/delete/<?= $penerbit['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>