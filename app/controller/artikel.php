<?php
class artikel extends Controller
{
    private $id;

    public function index($id = [])
    {
        session_start();
        if (!empty($id)) {
            $data['judul'] = 'Artikel';
            $artikelId = base64_decode($id);
            $data['article'] = $this->model('artikel_model')->getArtikel($artikelId);
            $this->view('templates/header', $data);
            $this->view('artikel/view', $data);
            $this->view('templates/footer');

        } else {
            $data['articles'] = $this->model('artikel_model')->getAllArtikel();
            $data['contents'] = $this->model('artikel_model')->getIsiArtikel();
            $data['judul'] = 'Artikel';
            $this->view('templates/header', $data);
            $this->view('artikel/index', $data);
            $this->view('templates/footer');
        }
    }
}