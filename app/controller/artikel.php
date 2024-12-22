<?php
class artikel extends Controller
{
    private $id;
    public function index()
    {
        $data['judul'] = 'Artikel';
        $this->view('templates/header', $data);
        $this->view('artikel/index');
        $this->view('templates/footer');
        $this->id = $_SESSION['user'];
    }
}