<?php
class skrinning extends controller
{
    private $id;
    public function __construct()
    {
        session_start();
    }
    public function index($data = [])
    {
        if (isset($_SESSION['user'])) {
            $data['judul'] = 'skrinning';
            $data['css'] = 'skrinning';
            $this->id = $_SESSION['user'];
            $data['id'] = $this->id;
            $data['week'] = $this->model('user_tracking')->getWeek($this->id);
            $this->view('templates/header', $data);
            $this->view('skrinning/index', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function minggu46()
    {
        $data['judul'] = 'Minggu 4-6';
        $data['css'] = 'skrinning';
        if(isset($_SESSION['user'])){
            if (isset($_POST['section'])) {
                $section = $_POST['section']; 
                if ($section === 'usg') {
                    header('Location: ' . BASEURL . 'skrinning/minggu46#usg');
                    exit;
                } elseif ($section === 'kankerserviks') {
                    header('Location: ' . BASEURL . 'skrinning/minggu46#kankerserviks');
                    exit;
                } elseif ($section === 'hormonkehamilan') {
                    header('Location: ' . BASEURL . 'skrinning/minggu46#hormonkehamilan');
                    exit;
                }
            }  
            $this->view('templates/header', $data);
            $this->view('skrinning/minggu46');
            $this->view('templates/footer');
        }else{
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function minggu013()
    {
        $data['judul'] = 'Minggu 0-13';
        $data['css'] = 'skrinning';
        if(isset($_SESSION['user'])){
            if (isset($_POST['section'])) {
                $section = $_POST['section']; 
                if ($section === 'antibodi') {
                    header('Location: ' . BASEURL . 'skrinning/minggu013#antibodi');
                    exit;
                } elseif ($section === 'torch') {
                    header('Location: ' . BASEURL . 'skrinning/minggu013#torch');
                    exit;
                }
            } 
            $this->view('templates/header', $data);
            $this->view('skrinning/minggu013');
            $this->view('templates/footer');
        }else{
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function minggu1013()
    {
        $data['judul'] = 'Minggu 10-13';
        $data['css'] = 'skrinning';
        
        if(isset($_SESSION['user'])){
            if (isset($_POST['section'])) {
                $section = $_POST['section']; 
                if ($section === 'papp-a') {
                    header('Location: ' . BASEURL . 'skrinning/minggu1013#papp-a');
                    exit;
                } elseif ($section === 'nipt') {
                    header('Location: ' . BASEURL . 'skrinning/minggu1013#nipt');
                    exit;
                } elseif ($section === 'cvs') {
                    header('Location: ' . BASEURL . 'skrinning/minggu1013#cvs');
                    exit;
                }
            } 
            $this->view('templates/header', $data);
            $this->view('skrinning/minggu1013');
            $this->view('templates/footer');
        }else{
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function minggu1520()
    {
        $data['judul'] = 'Minggu 15-20';
        $data['css'] = 'skrinning';
        
        if (isset($_SESSION['user'])) {
            if (isset($_POST['section'])) {
                $section = $_POST['section']; 
                if ($section === 'quad') {
                    header('Location: ' . BASEURL . 'skrinning/minggu1520#quad');
                    exit;
                } elseif ($section === 'amniosentesis') {
                    header('Location: ' . BASEURL . 'skrinning/minggu1520#amniosentesis');
                    exit;
                }
            } 
            $this->view('templates/header', $data);
            $this->view('skrinning/minggu1520');
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }

    }
    public function minggu2428()
    {
        $data['judul'] = 'Minggu 24-288';
        $data['css'] = 'skrinning';

        if (isset($_SESSION['user'])) {
            if (isset($_POST['section'])) {
                $section = $_POST['section']; 
                if ($section === 'ogtt') {
                    header('Location: ' . BASEURL . 'skrinning/minggu2428#ogtt');
                    exit;
                }
            } 
            $this->view('templates/header', $data);
            $this->view('skrinning/minggu2428');
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function minggu3436()
    {
        $data['judul'] = 'Minggu 34-36';
        $data['css'] = 'skrinning';
        
        if (isset($_SESSION['user'])) {
            if (isset($_POST['section'])) {
                $section = $_POST['section']; 
                if ($section === 'liver') {
                    header('Location: ' . BASEURL . 'skrinning/minggu3436#liver');
                    exit;
                } elseif ($section === 'sipilis') {
                    header('Location: ' . BASEURL . 'skrinning/minggu3436#sipilis');
                    exit;
                } elseif ($section === 'rontgen') {
                    header('Location: ' . BASEURL . 'skrinning/minggu3436#rontgen');
                    exit;
                }elseif ($section === 'std') {
                    header('Location: ' . BASEURL . 'skrinning/minggu3436#std');
                    exit;
                } elseif ($section === 'gbs') {
                    header('Location: ' . BASEURL . 'skrinning/minggu3436#gbs');
                    exit;
                }
            } 
            $this->view('templates/header', $data);
            $this->view('skrinning/minggu3436');
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }
    }
}