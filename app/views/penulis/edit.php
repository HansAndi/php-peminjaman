<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 540px;">
        <div class="card-header">
            <div class="d-flex justify-content-center">
                <h5 class="card-title">EDIT PENULIS</h5>
            </div>
        </div>

        <div class="card-body">
            <form action="<?= BASE_URL; ?>/penulis/edit/<?= $data['penulis']['id']; ?>" method="post">
                <div class="form-group">
                    <label for="nama_penulis">Nama Penulis</label>
                    <input type="text" class="form-control" id="nama_penulis" name="nama_penulis" value="<?= $data['penulis']['nama_penulis'] ?>">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                        <?php if ($data['penulis']['jenis_kelamin'] == 'L') : ?>
                            <option value="L" selected>Laki-laki</option>
                            <option value="P">Perempuan</option>
                        <?php else : ?>
                            <option value="L">Laki-laki</option>
                            <option value="P" selected>Perempuan</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tahun Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $data['penulis']['tanggal_lahir'] ?>">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Edit Penulis</button>
                    <a class="btn btn-primary" href="<?= BASE_URL; ?>/penulis" role="button">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>