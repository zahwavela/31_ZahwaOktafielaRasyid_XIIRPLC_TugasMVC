<?php
class Keahlian extends Controller {
    public function index() {
        $data['judul'] = "Keahlian";
        $data['keahlian'] = $this->model('Keahlian_model')->getKeahlian();
        $this->view('templates/header', $data);
        $this->view('keahlian/index', $data);
        $this->view('templates/footer');
    }
}