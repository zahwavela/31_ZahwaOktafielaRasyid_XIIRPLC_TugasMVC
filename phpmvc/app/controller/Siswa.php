<?php
class Siswa extends Controller
{
    public function index()
    {
        $data['judul'] = "Siswa";
        $data['siswa'] = $this->model("Siswa_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Siswa";
        $data['siswa'] = $this->model("Siswa_model")->getBlogById($id);
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer', $data);
    }

    public function tambah()
    {
        if ($this->model('Siswa_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' . BASE_URL . '/siswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Siswa_model')->hapusDataSiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('location: ' . BASE_URL . '/siswa');
            exit;
        }
    }
    // {
    //     $data['judul'] = "Siswa";
    //     $data['siswa'] = $this->model("Siswa_model")->getAllSiswa();
    //     $this->view('templates/header', $data);
    //     $this->view('daftar_siswa/index', $data);
    //     $this->view('templates/footer', $data);
    // }
}