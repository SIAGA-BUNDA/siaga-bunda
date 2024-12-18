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
            $data['isiPostingan'] = $this->model('postingan')->getIsiPostingan(); 
            $data['postingan'] = $this->model('postingan')->getAllPostingan(); 
            $this->view('templates/header', $data);
            $this->view('komunitas/index', $data);
            $this->view('templates/footer');
            $this->id = $_SESSION['user'];
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function tambahPostingan(){
        session_start();
        $data = $_POST;
        var_dump($data);
        $this->model('postingan')->tambahPostingan($data, $_SESSION['user']);
        header('Location: ' . BASEURL . 'komunitas');
    }
}