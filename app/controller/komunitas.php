<?php
class komunitas extends Controller
{
    private $id;
    public function index()
    {
        session_start();
        if (isset($_SESSION['user'])) {
            $data['judul'] = 'Komunitas';
            $data['css'] = 'sebelumLogin';
            $data['postingan'] = $this->model('postingan')->getIsiPostingan(); 
            $this->view('templates/header', $data);
            $this->view('komunitas/index', $data);
            $this->view('templates/footer');
            $this->id = $_SESSION['user'];
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }
    }
}