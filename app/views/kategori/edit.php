<!-- Di dalam file edit.php -->
<?php
include '../app/views/layouts/header.php';
include '../app/views/layouts/sidebar.php';
?>

<div class="page-content">
    <div class="container">
        <form action="<?= BASE_URL; ?>/kategori/edit/<?= $data['kategori']['id']; ?>" method="post">
            <div class="form-group">
                <label for="nama">Kategori</label>
                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="<?= $data['kategori']['nama_kategori']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<?php
include '../app/views/layouts/footer.php';
?>