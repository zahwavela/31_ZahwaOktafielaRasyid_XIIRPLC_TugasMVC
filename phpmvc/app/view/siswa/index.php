<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary btn-sm mb-3" onclick="add()">Tambah Data Siswa</button>
            <h3>Data Siswa</h3>
            <ul class="list-group">
                <?php foreach ($data['siswa'] as $i) : ?>
                    <li class="list-group-item d-flex justify-content-between align-item-center">
                        <?= $i['nama']; ?>
                        <div class="float-end">
                            <a href="<?= BASE_URL ?>/siswa/detail/<?= $i['id']; ?>" onclick="tes(this)" data-id="<?= $i['id']; ?>" class="btn btn-primary btn-sm">Detail</a>
                            <button type="button" class="btn btn-success btn-sm" onclick="ubah_data(this)" data-id="ubah_<?= $i['id']; ?>">Ubah</button>
                            <a href="<?= BASE_URL ?>/siswa/hapus/<?= $i['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin?');">Hapus</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <!-- Modal -->
    <div class="add" id="add">
        <div class="content-add">
            <span class="close" onclick="cl()">&times;</span>
            <h4 class="mb-3">Tambah Data Siswa</h4>
            <form action="<?= BASE_URL; ?>/siswa/tambah" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-sm">Tambah Data</button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="cl()">Close</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal Ubah -->
    <?php foreach ($data['siswa'] as $i) : ?>
        <div class="ubah" id="ubah_<?= $i['id']; ?>">
            <div class="content-ubah">
                <span class="close" style="float: right; font-size : 15;" onclick="cl_ubah(this)" data-id-cl="ubah_<?= $i['id']; ?>">&times;</span>
                <h4 class="mb-3">Ubah Data Siswa</h4>
                <form action="<?= BASE_URL; ?>/siswa/ubah" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $i['id']; ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $i['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <?php
                                if($i['jenis_kelamin'] == 'Laki - Laki'){
                                    echo '<option value="Laki - Laki" selected>Laki - Laki</option><option value="Perempuan">Perempuan</option>';
                                } else if($i['jenis_kelamin'] == 'Perempuan'){
                                    echo '<option value="Laki - Laki">Laki - Laki</option><option value="Perempuan" selected>Perempuan</option>';
                                } else {
                                    echo '<option value="Laki - Laki">Laki - Laki</option><option value="Perempuan">Perempuan</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $i['alamat']; ?>">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-sm">Ubah Data</button>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="cl_ubah(this)" data-id-cl="ubah_<?= $i['id']; ?>">Close</button>
                    </div>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<style>
    .close_ubah:hover,
    .close_ubah:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    .content-ubah{
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 40%;
        border-radius: 7px;
    }
    .ubah{
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
    }
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    .content-add{
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 40%;
        border-radius: 7px;
    }
    .add{
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
    }
</style>
<script>
    function ubah_data(obj){
        document.getElementById(obj.getAttribute('data-id')).style.display = 'block'
    }
    function cl_ubah(obj){
        document.getElementById(obj.getAttribute('data-id-cl')).style.display = 'none'
    }
    function cl(){
        document.getElementById('add').style.display = 'none'
    }
    function add(){
        document.getElementById('add').style.display = 'block'
    }
</script>