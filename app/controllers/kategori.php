<?php

class Kategori extends Controller
{
    public function index()
    {
        $data['title'] = 'Kategori';
        $data['kategori'] = $this->model('Kategori_model')->getAllKategori();

        $this->view('layouts/main', $data);
        $this->view('layouts/sidebar');
        $this->view('layouts/header', $data);
        $this->view('kategori/index', $data);
        $this->view('layouts/footer');
    }

    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Proses tambah data kategori
            $data = [
                'nama_kategori' => $_POST['nama_kategori'],
            ];
            $result = $this->model('Kategori_model')->tambahDataKategori($data);
            if ($result > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            }
            header('Location: ' . BASE_URL . '/kategori');
            exit;
        } else {
            // Jika bukan request POST, tampilkan form tambah
            $data['title'] = 'Tambah Kategori';
            $this->view('layouts/main', $data);
            $this->view('layouts/sidebar');
            $this->view('layouts/header', $data);
            $this->view('kategori/tambah', $data); // Memperbaiki path view yang menunjuk ke tambah.php
            $this->view('layouts/footer');
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Proses edit data kategori
            if ($this->model('Kategori_model')->updateDataKategori($id, $_POST) > 0) {
                Flasher::setFlash('berhasil', 'diubah', 'success');
            } else {
                Flasher::setFlash('gagal', 'diubah', 'danger');
            }
            header('Location: ' . BASE_URL . '/kategori');
            exit;
        } else {
            $data = [
                'title' => 'Edit Kategori',
                'kategori' => $this->model('Kategori_model')->getKategoriById($id)
            ];
            $this->view('layouts/main', $data);
            $this->view('layouts/sidebar');
            $this->view('layouts/header', $data);
            $this->view('kategori/edit', $data);
            $this->view('layouts/footer');
        }
    }

    public function delete($id)
    {
        // Proses hapus data penerbit
        if ($this->model('Kategori_model')->hapusDataKategori($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
        }
        header('Location: ' . BASE_URL . '/kategori');
        exit;
    }
}

?>