<div class="page-cotent mb-5">
    
    <nav aria-label="breadcrumb bg-light" class="ini">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active text-dark" aria-current="page"><strong>List Penulis</strong></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-4 mt-4">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formModal">
        <strong>+</strong> Add Penulis
    </button>

    <div class="row">
    <?php foreach ($data['penulis'] as $penulis) : ?>
        <div class="col-md-4 mt-4">
            <div class="card" style="width: 18rem;">
    
                <div class="card-body">
                    <h5 class="card-title"><?= $penulis['nama_penulis']; ?></h5>
                    <p class="card-text"><?= $penulis['jenis_kelamin']; ?></p>
                    <p class="card-text"><?= $penulis['tahun_lahir']; ?></p>
                    <p class="card-text"><?= $penulis['email']; ?></p>
                    <p class="card-text"><?= $penulis['judul_buku']; ?></p>
                    <a class="btn btn-primary btn-lg mb-2" href="<?= BASE_URL; ?>/penulis/detail/<?= $penulis['id']; ?>" role="button">Detail</a><br>
                    <a class="btn btn-warning btn-lg mb-2" href="<?= BASE_URL; ?>/penulis/edit/<?= $penulis['id']; ?>" role="button">Edit</a><br>
                    <a class="btn btn-danger btn-lg" href="<?= BASE_URL; ?>/penulis/delete/<?= $penulis['id']; ?>" role="button" onclick="return confirm('YAKIN?');">Delete</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
    <br>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" nama_penulisModal>Add Penulis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" action="<?= BASE_URL;?>/penulis/tambah" method="post">
                    <div class="form-group">
                        <label for="nama_penulis">Nama Penulis</label>
                        <input type="text" class="form-control" id="nama_penulis" name="nama_penulis">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="Pria">Pria</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tahun_lahir">Tahun Lahir</label>
                        <input type="text" class="form-control" id="tahun_lahir" name="tahun_lahir">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="judul_buku">Judul Buku</label>
                        <textarea class="form-control" id="Judul_Buku" name="judul_buku"></textarea>
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Penulis</button>
        </form>
      </div>
    </div>
  </div>
</div>

<style>
    .ini{
        background-color: aqua;
        border-radius: 5px;
    }

    .breadcrumb-item {
        margin-left: 5px;
        ;
    }

    img {
        width: 100px;
        height: 300px;
    }
</style>