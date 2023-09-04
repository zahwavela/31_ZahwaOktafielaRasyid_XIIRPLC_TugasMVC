<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <h3>Daftar Siswa</h3>
                <?php foreach ($data['siswa'] as $siswa) : ?>
                    <ul>
                        <li><?= $siswa['nama']; ?></li>
                        <li><?= $siswa['jenis kelamin']; ?></li>
                        <li><?= $siswa['alamat']; ?></li>
                    </ul>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</body>
