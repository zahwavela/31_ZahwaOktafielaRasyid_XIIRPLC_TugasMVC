<div class="container">
    <h3 class="mt-4" style="margin-top: 20px;">Kompetensi Keahlian</h3><br>
    <?php foreach ($data['keahlian'] as $jurusan) : ?>
        <ul>
            <li>
                <h5><?= $jurusan['TKP']; ?></h5>
                <p>TKP merupakan kegiatan yang berhubungan dengan pembangunan perumahan, mulai dari perencanaan, pelaksanaan, dan evaluasi kegiatan konstruksi.</p>
            </li>
            <li>
                <h5><?= $jurusan['DPIB']; ?></h5>
                <p>DPIB merupakan jurusan yang mempelajari tentang perencanaan bangunan, pelaksanaan pembuatan gedung dan perbaikan gedung.</p>
            </li>
            <li>
                <h5><?= $jurusan['TPTUP']; ?></h5>
                <p>TPTUP merupakan suatu konsentrasi keahlian teknik Ketenagalistrikan yang menerapkan sistem pengajaran yang mengarah ke bidang pemasangan, perawatan
                     dan perbaikan AC dan mesin pendingin serta pemanas ruangan baik skala domestik maupun skala industri.</p>
            </li>
            <li>
                <h5><?= $jurusan['TP']; ?></h5>
                <p>TP merupakan mempelajari satu bidang kerja saja yaitu bagaimana cara untuk mengelas yang baik, dan teori tentang apa saja bahan untuk proses pengelasan</p>
            </li>
            <li>
                <h5><?= $jurusan['RPL']; ?></h5>
                <p>RPL merupakan jurusan yang mempelajari dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.</p>
            </li>
            <li>
                <h5><?= $jurusan['TB']; ?></h5>
                Tata Boga / Kuliner merupakan jurusan yang mempelajari teknik penyajian makanan dengan memperhatikan estetika, kualitas, rasa, dan kebutuhan gizi.
            </li>
            <li>
                <h5><?= $jurusan['Akuntansi']; ?></h5>
                Akuntansi merupakan mengajarkan konsep dan teknik untuk mengukur, menganalisis, dan melaporkan keuangan sebuah perusahaan atau organisasi.
            </li>
        </ul>
    <?php endforeach ?>
</div>