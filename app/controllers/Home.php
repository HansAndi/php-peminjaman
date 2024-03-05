<?php
class Home extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'nama' => $this->model('User_model')->getUser(),
        ];
        $this->view('layouts/main', $data);
        $this->view('layouts/sidebar',);
        $this->view('layouts/header', $data);
        $this->view('home/index', $data);
        $this->view('layouts/footer');
    }
}
