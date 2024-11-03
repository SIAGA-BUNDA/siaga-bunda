<?php
class Home extends Controller{
    public function index(){
        $data ['judul'] = 'Home';
        $data ['css'] = 'sebelumLogin';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
    public function tes(){
        $this->view('templates/header');    
        echo "lolmao";
        $this->view('templates/footer');
    }
}
?>