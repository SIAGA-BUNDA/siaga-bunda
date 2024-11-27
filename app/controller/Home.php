<?php
class home extends Controller{
    private $id;
    public function index(){
        session_start(); 
        if(isset($_SESSION['user'])){
            $data ['judul'] = 'Home';
            $data ['css'] = 'sebelumLogin';
            $this->view('templates/header', $data);
            $this->view('home/index');
            $this->view('templates/footer');
            $this->id = $_SESSION['user'];
        }
        else{
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function profil(){
        session_start(); 
        if(isset($_SESSION['user'])){
            $data ['judul'] = 'Profil';
            $data ['css'] = 'sesudahLogin';
            $this->view('templates/header', $data);
            $this->view('home/profil');
            $this->view('templates/footer');
            $this->id = $_SESSION['user'];
        }
        else{
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function sesudahLogin(){
        session_start(); 
        if(isset($_SESSION['user'])){
            $data ['judul'] = 'Home (Sesudah Login)';
            $data ['css'] = 'sesudahLogin';
            $this->view('templates/header', $data);
            $this->view('home/sesudahLogin');
            $this->view('templates/footer');
            $this->id = $_SESSION['user'];
        }
        else{
            header('Location: ' . BASEURL . 'signIn');
        }
    }
}