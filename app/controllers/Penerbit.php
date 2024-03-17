<?php

class Penerbit extends Controller
{
    public function index()
    {
        $data['title'] = 'Penerbit';
        $data['penerbit'] = $this->model('Penerbit_model')->getAllPenerbit();

        $this->view('layouts/main', $data);
        $this->view('layouts/sidebar');
        $this->view('layouts/header', $data);
        $this->view('penerbit/index', $data);
        $this->view('layouts/footer');
    }

    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Proses tambah data penerbit
            $data = [
                'nama' => $_POST['nama'],
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
            $this->view('layouts/main', $data);
            $this->view('layouts/sidebar');
            $this->view('layouts/header', $data);
            $this->view('penerbit/tambah', $data); // Memperbaiki path view yang menunjuk ke tambah.php
            $this->view('layouts/footer');
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Proses edit data penerbit
            $data = [
                'id' => $id,
                'nama' => $_POST['nama'],
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
            $this->view('layouts/main', $data);
            $this->view('layouts/sidebar');
            $this->view('layouts/header', $data);
            $this->view('penerbit/edit', $data);
            $this->view('layouts/footer');
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