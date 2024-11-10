<?php
class signIn extends controller{
    public function index(){
        $data['judul'] = 'Login';
        $data['css'] = 'signIn';
        
        $this->view('templates/header', $data);
        $this->view('signIn/index');
        $this->view('templates/footer');
    }
}