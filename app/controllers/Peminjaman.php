<?php
class Peminjaman extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Peminjaman',
        ];
        $active = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
        $this->view('layouts/main', $data);
        $this->view('layouts/sidebar', $active);
        $this->view('layouts/header', $data);
        $this->view('peminjaman/index', $data);
        $this->view('layouts/footer');
    }
}