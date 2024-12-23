<?php
class artikel extends Controller
{
    private $id;
    public function index()
    {
        session_start();
        if (isset($_SESSION['user'])) {
            $data['judul'] = 'Artikel';
            $this->view('templates/header', $data);
            $this->view('artikel/index');
            $this->view('templates/footer');
        }
    }
}