<?php
class Pinjam extends Controller {

    public function index()
    {
        $data = [
            'title' => 'Peminjaman',
            'peminjaman' => $this->model('Peminjaman_model')->getAllPeminjaman(),
        ];

        $this->view('pinjam/index', $data);
    }
}