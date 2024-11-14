<?php
class signIn extends controller{
    public function index(){
        $data['judul'] = 'Login';
        $data['css'] = 'signIn';
        $this->view('templates/header', $data);
        $this->view('signIn/index');
        $this->view('templates/footer');
    }
    public function forgotPassword(){
        $data['judul'] = 'Forgot Password';
        $data['css'] = 'forgotPassword';
        $this->view('templates/header', $data);
        $this->view('signIn/forgotPassword');
        $this->view('templates/footer');
    }
    public function resetPassword(){
        $data['judul'] = 'Reset Password';
        $data['css'] = 'resetPassword';
        $this->view('templates/header', $data);
        $this->view('signIn/resetPassword');
        $this->view('templates/footer');
    }

    public function login(){

    }
}