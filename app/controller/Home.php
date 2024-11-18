<?php
class home extends Controller{
    public function index(){
        $data ['judul'] = 'Home';
        $data ['css'] = 'sebelumLogin';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
    public function userIndex(){
        $data ['judul'] = 'HomeAfter';
        $data ['css'] = 'sesudahLogin';
        $this->view('templates/header', $data);
        $this->view('home/sesudahLogin');
        $this->view('templates/footer');
    }
    public function awikwok(){
        $data ['judul'] = 'awikwok';
        $data ['css'] = 'sesudahLogin';
        $this->view('templates/header', $data);
        $this->view('home/awikwok');
        $this->view('templates/footer');
    }
}
?>