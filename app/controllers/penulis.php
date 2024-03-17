<?php

class Penulis extends Controller {
    public function index()
    {
        $data = ['title' => 'Penulis'];
        $data['penulis'] = $this->model('Penulis_model')->getAllPenulis();
        $this->view('layouts/main', $data);
        $this->view('layouts/sidebar');
        $this->view('layouts/header', $data);
        $this->view('penulis/index', $data);
        $this->view('layouts/footer');
    }

    public function detail($id) {
        $data['title'] = 'Detail Penulis';
        $data['penulis'] = $this->model('Penulis_model')->getPenulisById($id);
        $this->view('layouts/main', $data);
        $this->view('layouts/sidebar');
        $this->view('layouts/header', $data);
        $this->view('penulis/detail', $data);
        $this->view('layouts/footer');
    }

    public function tambah() {
        Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        if( $this->model('Penulis_model')->tambahDataPenulis($_POST) > 0 ) {
            header('Location: ' . BASE_URL . '/penulis');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/penulis');
            exit;
        }
    }

    public function delete($id) {
        Flasher::setFlash('berhasil', 'dihapus', 'success');
        if( $this->model('Penulis_model')->hapusDataPenulis($id) > 0 ) {
            header('Location: ' . BASE_URL . '/penulis');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/penulis');
            exit;
        }
    }

    public function edit($id){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Update the penulis
            if ($this->model('Penulis_model')->updatePenulis($id, $_POST)) {
                // Set flash message and redirect
                Flasher::setFlash('Berhasil', 'diubah', 'success');
                header('Location: ' . BASE_URL . '/penulis');
                exit;
            } else {
                // Set flash message and redirect
                Flasher::setFlash('Gagal', 'diubah', 'danger');
                header('Location: ' . BASE_URL . '/penulis');
                exit;
            }
        } else {
            $data['title'] = 'Edit Penulis';
            $data['penulis'] = $this->model('Penulis_model')->getPenulisById($id);
            $this->view('layouts/main', $data);
            $this->view('layouts/sidebar');
            $this->view('layouts/header', $data);
            $this->view('penulis/edit', $data);
            $this->view('layouts/footer');
        }
    }
}