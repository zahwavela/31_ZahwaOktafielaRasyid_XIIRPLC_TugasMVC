<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                    Tambah data Siswa
                </button><br>

                <h3 class="mt-4">DATA SISWA</h3>
                <ul class="list-group">
                    <?php foreach ($data['siswa'] as $siswa) : ?>
                        <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                            <?= $siswa['nama']; ?>
                            <a href="<?= BASE_URL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="btn btn-danger btn-sm float-right" onclick="return confirm('yakin?');">hapus</a>
                            <a href="<?= BASE_URL; ?>/siswa/ubah/<?= $siswa['id']; ?>" class="btn btn-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?=$siswa['id']; ?>">ubah</a>
                            <a href="<?= BASE_URL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="btn btn-primary float-right">detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</body>

<!--MODAL -->

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL; ?>/siswa/tambah" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="laki-laki">Laki - laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>