<?php
class Home extends Controller
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
            'title' => 'Home',
        ];
        $this->view('home/index', $data);
    }
}
