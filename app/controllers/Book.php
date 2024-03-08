<?php

class Book extends Controller {
    public function index()
    {
        $data = [
            'title' => 'Book',
        ];
        $this->view('layouts/main', $data);
        $this->view('layouts/sidebar');
        $this->view('layouts/header', $data);
        $this->view('book/index', $data);
        $this->view('layouts/footer');
    }
}