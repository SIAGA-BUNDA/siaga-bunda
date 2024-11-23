<?php
class skrinning extends controller
{
    public function index($data = [])
    {
        $data['judul'] = 'skrinning';
        $data['css'] = 'skrinning';
        $this->view('templates/header', $data);
        $this->view('skrinning/index', $data);
        $this->view('templates/footer');
    }
    public function minggu46()
    {
        $data['judul'] = 'Minggu 4-6';
        $data['css'] = 'skrinning';
        $section = $_POST;
        if($section){
            header("Location: " . BASEURL . "/skrinning/minggu46#". $section['section']);
        
        }
        $this->view('templates/header', $data);
        $this->view('skrinning/minggu46');
        $this->view('templates/footer');
    }
    public function minggu013()
    {
        $data['judul'] = 'Minggu 0-13';
        $data['css'] = 'skrinning';
        $section = $_POST;
        if($section){
            header("Location: " . BASEURL . "/skrinning/minggu013#". $section['section']);
        
        }
        $this->view('templates/header', $data);
        $this->view('skrinning/minggu013');
        $this->view('templates/footer');
    }
    public function minggu1013()
    {
        $data['judul'] = 'Minggu 10-13';
        $data['css'] = 'skrinning';
        $section = $_POST;
        if($section){
            header("Location: " . BASEURL . "/skrinning/minggu1013#". $section['section']);
        
        }
        $this->view('templates/header', $data);
        $this->view('skrinning/minggu1013');
        $this->view('templates/footer');
    }
    public function minggu1520()
    {
        $data['judul'] = 'Minggu 15-20';
        $data['css'] = 'skrinning';
        $section = $_POST;
        if($section){
            header("Location: " . BASEURL . "/skrinning/minggu1520#". $section['section']);
        
        }
        $this->view('templates/header', $data);
        $this->view('skrinning/minggu1520');
        $this->view('templates/footer');
    }
    public function minggu2428()
    {
        $data['judul'] = 'Minggu 24-288';
        $data['css'] = 'skrinning';
        $section = $_POST;
        if($section){
            header("Location: " . BASEURL . "/skrinning/minggu2428#". $section['section']);
        
        }
        $this->view('templates/header', $data);
        $this->view('skrinning/minggu2428');
        $this->view('templates/footer');
    }
    public function minggu3436()
    {
        $data['judul'] = 'Minggu 34-36';
        $data['css'] = 'skrinning';
        $section = $_POST;
        if($section){
            header("Location: " . BASEURL . "/skrinning/minggu3436#". $section['section']);
        
        }
        $this->view('templates/header', $data);
        $this->view('skrinning/minggu3436');
        $this->view('templates/footer');
    }
}