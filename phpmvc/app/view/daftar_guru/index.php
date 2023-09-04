<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <h3>Daftar Guru</h3>
                <?php foreach ($data['guru'] as $guru) : ?>
                    <ul>
                        <li><?= $guru['Nama']; ?></li>
                        <li><?= $guru['Jurusan']; ?></li>
                        <li><?= $guru['Kode guru']; ?></li>
                    </ul>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</body>