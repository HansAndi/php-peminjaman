<div class="page-cotent mb-5">
    
    <nav aria-label="breadcrumb bg-light" class="ini">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active text-dark" aria-current="page"><strong>List Book</strong></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-4 mt-4">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formModal">
        <strong>+</strong> Add Book
    </button>

    <div class="row">
    <?php foreach ($data['book'] as $buku) : ?>
        <div class="col-md-4 mt-4">
            <div class="card" style="width: 18rem;">
                <img src="<?= BASE_URL; ?>/img/<?= $buku['cover']; ?>" class="card-img-top" alt="<?= $buku['judul']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $buku['judul']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $buku['penulis']; ?></h6>
                    <p class="card-text"><?= $buku['penerbit']; ?></p>
                    <p class="card-text"><?= $buku['tahun']; ?></p>
                    <a class="btn btn-primary btn-lg mb-2" href="<?= BASE_URL; ?>/book/detail/<?= $buku['id']; ?>" role="button">Detail</a><br>
                    <a class="btn btn-warning btn-lg mb-2" href="<?= BASE_URL; ?>/book/edit/<?= $buku['id']; ?>" role="button">Edit</a><br>
                    <a class="btn btn-danger btn-lg" href="<?= BASE_URL; ?>/book/delete/<?= $buku['id']; ?>" role="button" onclick="return confirm('YAKIN?');">Delete</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
    <br>
</div>

<!-- Modal -->
<!-- <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Add Book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="" action="<?= BASE_URL;?>/book/tambah" method="post">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis">
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit">
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun">
                    </div>
                    <div class="form-group">
                        <label for="summary">Summary</label>
                        <textarea class="form-control" id="summary" name="summary"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cover">Cover</label>
                        <input type="file" class="form-control-file" id="cover" name="cover">
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Add Book</button>
                </form>
            </div>
        </div>
    </div>
</div> -->

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Add Book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" action="<?= BASE_URL;?>/book/tambah" method="post">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis">
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit">
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun">
                    </div>
                    <div class="form-group">
                        <label for="summary">Summary</label>
                        <textarea class="form-control" id="summary" name="summary"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cover">Cover</label>
                        <input type="file" class="form-control-file" id="cover" name="cover">
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Book</button>
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