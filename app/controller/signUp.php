<?php
class signUp extends controller{
    public function index(){
        $data['judul'] = 'Sign Up';
        $data['css'] = 'signUp';
        $data['user'] = $this->model('User_model')->getUsers();
        $this->view('templates/header', $data);
        $this->view('signUp/index');
        $this->view('templates/footer');
    }
    public function tambah(){
        $this->model('User_model')->tambahUser($_POST);
        header('Location: '. BASEURL. '/signUp');
    }
}