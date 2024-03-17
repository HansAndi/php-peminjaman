<!-- Di dalam file tambah.php -->
<?php
include '../app/views/layouts/header.php';
include '../app/views/layouts/sidebar.php';
?>

<div class="page-content">
    <section class="row">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <form action="<?= BASE_URL; ?>/penerbit/tambah" method="post">
                        <div class="form-group">
                            <label for="nama_penerbit">Nama Penerbit:</label>
                            <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Nomor HP:</label>
                            <input type="number" class="form-control" id="no_hp" name="no_hp" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include '../app/views/layouts/footer.php';
?>