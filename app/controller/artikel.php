<?php
class artikel extends Controller
{
    private $id;
    public function index()
    {
        session_start();
        $data['judul'] = 'Artikel';
        $this->view('templates/header', $data);
        $this->view('artikel/index');
        $this->view('templates/footer');
    }

    public function test()
    {
        $data['judul'] = 'Artikel';
        $data['art'] = $this->model('artikel_model')->getIsiArtikel();
        $this->view('templates/header',$data);
        $this->view('artikel/view',$data);
        $this->view('templates/footer');
    }
}