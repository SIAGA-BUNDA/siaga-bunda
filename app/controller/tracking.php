<?php
class tracking extends Controller{
    private $id;
    public function index(){
        session_start(); 
        
        if(isset($_SESSION['user'])){
            $data ['judul'] = 'Home';
            $data ['css'] = 'sebelumLogin';
            $this->view('templates/header', $data);
            $this->view('tracking/index');
            $this->view('templates/footer');
            $this->id = $_SESSION['user'];
        }
        else{
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function input(){
        session_start(); 
        if(isset($_SESSION['user'])){
            $this->id = $_SESSION['user'];
        }
        $data = $_POST;
        echo($this->id);
        $data['gejala'] = isset($_POST['inputGejala'])? implode(', ', $_POST['inputGejala']) : '';
        echo $data['gejala'];
        $this->model('User_tracking')->tambah($data, $this->id);
        
        
    }
}
?>