<!-- Di dalam file tambah.php -->
<?php
include '../app/views/layouts/header.php';
include '../app/views/layouts/sidebar.php';
?>

<div class="page-content">
    <div class="col-12">
        div.
        <form action="<?= BASE_URL; ?>/kategori/tambah" method="post">
            <div class="form-group">
                <label for="nama_kategori">Kategori</label>
                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php
include '../app/views/layouts/footer.php';
?>