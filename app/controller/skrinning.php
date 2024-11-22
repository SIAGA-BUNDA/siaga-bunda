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
        

       
         
        // Handle fragment-based redirection
        // if ($skrinning) {
        //     
        // }
        $this->view('templates/header', $data);
        $this->view('skrinning/minggu46');
        $this->view('templates/footer');
    }
}