<?php

class Buku extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['login'])) {
            header('Location: ' . BASE_URL . '/login');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Buku',
            'buku' => $this->model('Buku_model')->getAllBuku(),
            'penulis' => $this->model('Penulis_model')->getAllPenulis(),
            'penerbit' => $this->model('Penerbit_model')->getAllPenerbit(),
            'kategori' => $this->model('Kategori_model')->getAllKategori()
        ];
        $this->view('buku/index', $data);
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Buku';
        $data['buku'] = $this->model('Buku_model')->getBukuById($id);
        $this->view('buku/detail', $data);
    }

    public function tambah()
    {
        Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        if ($this->model('Buku_model')->tambahDataBuku($_POST) > 0) {
            header('Location: ' . BASE_URL . '/buku');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/buku');
            exit;
        }
    }

    public function delete($id)
    {
        Flasher::setFlash('berhasil', 'dihapus', 'success');
        if ($this->model('Buku_model')->hapusDataBuku($id) > 0) {
            header('Location: ' . BASE_URL . '/buku');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/buku');
            exit;
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Update the buku
            if ($this->model('Buku_model')->updateBuku($id, $_POST)) {
                // Set flash message and redirect
                Flasher::setFlash('Berhasil', 'diubah', 'success');
                header('Location: ' . BASE_URL . '/buku');
                exit;
            } else {
                // Set flash message and redirect
                Flasher::setFlash('Gagal', 'diubah', 'danger');
                header('Location: ' . BASE_URL . '/buku');
                exit;
            }
        } else {
            $data = [
                'title' => 'Edit Buku',
                'buku' => $this->model('Buku_model')->getBukuById($id),
                'penulis' => $this->model('Penulis_model')->getAllPenulis(),
                'penerbit' => $this->model('Penerbit_model')->getAllPenerbit(),
                'kategori' => $this->model('Kategori_model')->getAllKategori()
            ];
            $this->view('buku/edit', $data);
        }
    }
}
