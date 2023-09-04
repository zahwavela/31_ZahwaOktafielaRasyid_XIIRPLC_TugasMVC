<?php
class Guru extends Controller
{
    public function index()
    {
        $data['judul'] = "Guru";
        $data['guru'] = $this->model("Guru_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Guru";
        $data['guru'] = $this->model("Guru_model")->getBlogById($id);
        $this->view('templates/header', $data);
        $this->view('guru/detail', $data);
        $this->view('templates/footer', $data);
    }

    public function tambah()
    {
        if ($this->model('Guru_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' . BASE_URL . '/guru');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Guru_model')->hapusDataGuru($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('location: ' . BASE_URL . '/guru');
            exit;
        }
    }
    // public function index()
    // {
    //     $data['judul'] = "Guru";
    //     $data['guru'] = $this->model("Guru_model")->getAllGuru();
    //     $this->view('templates/header', $data);
    //     $this->view('daftar_guru/index', $data);
    //     $this->view('templates/footer', $data);
    // }
}