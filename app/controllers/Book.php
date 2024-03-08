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
}