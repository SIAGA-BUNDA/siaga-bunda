<?php
class signUp extends controller{
    public function index(){
        $data['judul'] = 'Sign Up';
        $data['css'] = 'signUp';
        $data['user'] = $this->model('User_model')->getUsers();
        $this->view('templates/header', $data);
        $this->view('signUp/index', $data);
        $this->view('templates/footer');
    }
}