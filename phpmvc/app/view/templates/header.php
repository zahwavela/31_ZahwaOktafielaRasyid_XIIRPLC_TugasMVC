<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="http://localhost/phpmvc/public/css/bootstrap.min.css">
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/phpmvc/public/home"><strong>SMKNEDA</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/phpmvc/public/home">Home</a>
                    <a class="nav-item nav-link" href="/phpmvc/public/blog">Blog</a>
                    <a class="nav-item nav-link" href="/phpmvc/public/user/profile">About</a>
                    <a class="nav-item nav-link" href="/phpmvc/public/guru">Daftar guru</a>
                    <a class="nav-item nav-link" href="/phpmvc/public/siswa">Daftar siswa</a>
                    <a class="nav-item nav-link" href="/phpmvc/public/keahlian">Kompetensi Keahlian</a>
                </div>
            </div>
        </div>
    </nav>