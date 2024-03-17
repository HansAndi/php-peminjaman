<?php

class Penerbit extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['login'])) {
            header('Location: ' . BASE_URL . '/login');
        }

        if ($_SESSION['role'] != 'admin') {
            header('Location: ' . BASE_URL . '/home');
        }
    }
    
    public function index()
    {
        $data['title'] = 'Penerbit';
        $data['penerbit'] = $this->model('Penerbit_model')->getAllPenerbit();

        $this->view('penerbit/index', $data);
    }

    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Proses tambah data penerbit
            $data = [
                'nama_penerbit' => $_POST['nama_penerbit'],
                'alamat' => $_POST['alamat'],
                'no_hp' => $_POST['no_hp']
            ];
            $result = $this->model('Penerbit_model')->tambahDataPenerbit($data);
            if ($result > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            }
            header('Location: ' . BASE_URL . '/penerbit');
            exit;
        } else {
            // Jika bukan request POST, tampilkan form tambah
            $data['title'] = 'Tambah Penerbit';
            $this->view('penerbit/tambah', $data); // Memperbaiki path view yang menunjuk ke tambah.php
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Proses edit data penerbit
            $data = [
                'id' => $id,
                'nama_penerbit' => $_POST['nama_penerbit'],
                'alamat' => $_POST['alamat'],
                'no_hp' => $_POST['no_hp']
            ];
            if ($this->model('Penerbit_model')->updateDataPenerbit($id, $data) > 0) {
                Flasher::setFlash('berhasil', 'diubah', 'success');
            } else {
                Flasher::setFlash('gagal', 'diubah', 'danger');
            }
            header('Location: ' . BASE_URL . '/penerbit');
            exit;
        } else {
            $data = [
                'title' => 'Edit Penerbit',
                'penerbit' => $this->model('Penerbit_model')->getPenerbitById($id)
            ];
            $this->view('penerbit/edit', $data);
        }
    }

    public function delete($id)
    {
        // Proses hapus data penerbit
        if ($this->model('Penerbit_model')->hapusDataPenerbit($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
        }
        header('Location: ' . BASE_URL . '/penerbit');
        exit;
    }
}

?>