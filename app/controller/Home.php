<?php
class home extends Controller{
    public function index(){
        $data ['judul'] = 'Home';
        $data ['css'] = 'sebelumLogin';
        $data['nama']= $this->model('user_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
    public function sesudahLogin(){
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