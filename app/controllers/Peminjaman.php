<?php
class Peminjaman extends Controller
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
            'title' => 'Peminjaman',
        ];
        
        $this->view('peminjaman/index', $data);
    }
}
