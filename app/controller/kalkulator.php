<?php
class kalkulator extends Controller
{
    private $id;
    public function index()
    {
        session_start();
        $data['judul'] = 'Kalkulator';
        $data['css'] = 'sebelumLogin';
        $data['script'] = BASEURL . 'script/kalkulator.js';
        $this->view('templates/header', $data);
        $this->view('kalkulator/index');
        $this->view('templates/footer');
    }

    public function ultrasound()
    {
        session_start();
        $data['judul'] = 'Home';
        $data['css'] = 'sebelumLogin';
        $data['script'] = BASEURL . 'script/kalkulator.js';
        $this->view('templates/header', $data);
        $this->view('kalkulator/ultrasound');
        $this->view('templates/footer');
        $this->id = $_SESSION['user'];
    }
}