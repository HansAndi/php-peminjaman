<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 540px;">
        <div class="card-header">
            <div class="d-flex justify-content-center">
                <h5 class="card-title">EDIT PENULIS</h5>
            </div>
        </div>
        
            <div class="card-body">
                Nama Penulis: 
                <input type="text" name="nama_penulis" class="form-control" value="<?= $data['penulis']['nama_penulis']; ?>" /><br>
                Jenis Kelamin:
                <input type="text" name="jenis_kelamin" class="form-control" value="<?= $data['penulis']['jenis_kelamin']; ?>" /><br>
                Tahun Lahir:
                <input type="text" name="tahun_lahir" class="form-control" value="<?= $data['penulis']['tahun_lahir']; ?>" /><br>
                Email:
                <input type="text" name="email" class="form-control" value="<?= $data['penulis']['email']; ?>" /><br>
                Judul Buku:
                <textarea name="judul_buku" class="form-control"><?= $data['penulis']['judul_buku']; ?></textarea>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Edit Penulis</button>
                <a class="btn btn-primary" href="<?= BASE_URL; ?>/book" role="button">Kembali</a>
            </div>
        </form>
    </div>
</div>