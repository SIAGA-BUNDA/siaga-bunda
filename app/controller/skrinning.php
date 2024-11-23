<?php
class skrinning extends controller
{
    private $id;
    public function __construct()
    {
        session_start();
    }
    public function index($data = [])
    {
        if (isset($_SESSION['user'])) {
            $data['judul'] = 'skrinning';
            $data['css'] = 'skrinning';
            $this->id = $_SESSION['user'];
            $data['id'] = $this->id;
            $data['week'] = $this->model('user_tracking')->getWeek($this->id);
            $this->view('templates/header', $data);
            $this->view('skrinning/index', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function minggu46()
    {
        $data['judul'] = 'Minggu 4-6';
        $data['css'] = 'skrinning';
        if(isset($_SESSION['user'])){
            $this->view('templates/header', $data);
            $this->view('skrinning/minggu46');
            $this->view('templates/footer');
        }else{
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function minggu013()
    {
        $data['judul'] = 'Minggu 0-13';
        $data['css'] = 'skrinning';
        if(isset($_SESSION['user'])){
            $this->view('templates/header', $data);
            $this->view('skrinning/minggu013');
            $this->view('templates/footer');
        }else{
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function minggu1013()
    {
        $data['judul'] = 'Minggu 10-13';
        $data['css'] = 'skrinning';
        
        if(isset($_SESSION['user'])){
            $this->view('templates/header', $data);
            $this->view('skrinning/minggu1013');
            $this->view('templates/footer');
        }else{
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function minggu1520()
    {
        $data['judul'] = 'Minggu 15-20';
        $data['css'] = 'skrinning';
        
        if (isset($_SESSION['user'])) {
            $this->view('templates/header', $data);
            $this->view('skrinning/minggu1520');
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }

    }
    public function minggu2428()
    {
        $data['judul'] = 'Minggu 24-288';
        $data['css'] = 'skrinning';

        if (isset($_SESSION['user'])) {
            $this->view('templates/header', $data);
            $this->view('skrinning/minggu2428');
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function minggu3436()
    {
        $data['judul'] = 'Minggu 34-36';
        $data['css'] = 'skrinning';
        
        if (isset($_SESSION['user'])) {
            $this->view('templates/header', $data);
            $this->view('skrinning/minggu3436');
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }
    }
}