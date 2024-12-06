<?php
class home extends Controller
{
    private $id;
    public function index()
    {
        session_start();
        if (isset($_SESSION['user'])) {
            $data['judul'] = 'Home';
            $data['css'] = 'sebelumLogin';
            $this->view('templates/header', $data);
            $this->view('home/index');
            $this->view('templates/footer');
            $this->id = $_SESSION['user'];
        } else {
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
        if (isset($_SESSION['user'])) {
            $data['judul'] = 'Home';
            $data['css'] = 'sesudahLogin';

            $this->id = $_SESSION['user'];
            // $data['weightData'] = $this->model('User_tracking')->getDataWeight($this->id);
            // $Imt = round($data['weightData'][0]['PRA_BERAT'] / ($data['weightData'][0]['TINGGI_BADAN'] ** 2 / 10000), 1);
            // if ($Imt < 18.5) {
            //     $data['category'] = 'underweight';
            // } else if ($Imt >= 18.5 && $Imt <= 24.9) {
            //     $data['category'] = 'normal';
            // } else if ($Imt >= 25 && $Imt <= 29.9) {
            //     $data['category'] = 'over';
            // } else if ($Imt >= 30) {
            //     $data['category'] = 'obese';
            // }

            $this->view('templates/header', $data);
            $this->view('home/sesudahLogin', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }
    }
}