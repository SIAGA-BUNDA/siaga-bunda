<?php
class komentar extends Controller{
    private $id;
    public function index(){
        session_start(); 
        
        if(isset($_SESSION['user'])){
            $data ['judul'] = 'Komentar';
            $data ['css'] = 'sesudahLogin';
            $this->view('templates/header', $data);
            $this->view('komentar/index');
            $this->view('templates/footer');
            $this->id = $_SESSION['user'];
        }
        else{
            header('Location: ' . BASEURL . 'signIn');
        }
    }
}
?>