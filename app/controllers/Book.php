<?php

class Book extends Controller {
    public function index()
    {
        $data = ['title' => 'Book'];
        $data['book'] = $this->model('Book_model')->getAllBook();
        $this->view('layouts/main', $data);
        $this->view('layouts/sidebar');
        $this->view('layouts/header', $data);
        $this->view('book/index', $data);
        $this->view('layouts/footer');
    }

    public function detail($id) {
        $data['title'] = 'Detail Book';
        $data['book'] = $this->model('Book_model')->getBookById($id);
        $this->view('layouts/main', $data);
        $this->view('layouts/sidebar');
        $this->view('layouts/header', $data);
        $this->view('book/detail', $data);
        $this->view('layouts/footer');
    }

    public function tambah() {
        Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        if( $this->model('Book_model')->tambahDataBook($_POST) > 0 ) {
            header('Location: ' . BASE_URL . '/book');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/book');
            exit;
        }
    }

    public function delete($id) {
        Flasher::setFlash('berhasil', 'dihapus', 'success');
        if( $this->model('Book_model')->hapusDataBook($id) > 0 ) {
            header('Location: ' . BASE_URL . '/book');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/book');
            exit;
        }
    }

    public function edit($id){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Update the book
            if ($this->model('Book_model')->updateBook($id, $_POST)) {
                // Set flash message and redirect
                Flasher::setFlash('Berhasil', 'diubah', 'success');
                header('Location: ' . BASE_URL . '/book');
                exit;
            } else {
                // Set flash message and redirect
                Flasher::setFlash('Gagal', 'diubah', 'danger');
                header('Location: ' . BASE_URL . '/book');
                exit;
            }
        } else {
            $data['title'] = 'Edit Book';
            $data['book'] = $this->model('Book_model')->getBookById($id);
            $this->view('layouts/main', $data);
            $this->view('layouts/sidebar');
            $this->view('layouts/header', $data);
            $this->view('book/edit', $data);
            $this->view('layouts/footer');
        }
    }
}