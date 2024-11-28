<?php
class pageAdmin extends Controller{
    private $id;
    public function index(){
        session_start(); 
        if(isset($_SESSION['admin'])){
            $data ['judul'] = 'Page Admin';
            $data ['css'] = 'pageAdmin';
            $username = $_SESSION['admin'];
            $data ['artikel'] = $this->model('artikel')->getAllArtikel();
            $data['isi'] = $this->model('artikel')->getIsiArtikel();
            $data ['user'] = $this->model('user_model')->getUsers();
            $data ['username'] = $this->model('admin_model')->getName($username);
            $data ['role'] = $this->model('admin_model')->getRole($username);
            $data ['laporanPostingan'] = $this->model('laporan')->getLaporanPostingan();
            $data ['laporanKomentar'] = $this->model('laporan')->getLaporanKomentar();
            $data ['isiPostingan'] = $this->model('laporan')->getIsiPostingan();
            $data ['isiKomentar'] = $this->model('laporan')->getIsiKomentar();
            $data ['script'] = "// function untuk ganti-ganti konten
                function showContent(contentId) {
                document.querySelectorAll('.content-section').forEach((section) => {
                    section.classList.add('hidden');
                });

                document.getElementById(contentId).classList.remove('hidden');
                }

                // Default: konten 'Tambah Artikel' bakal muncul pas halaman dimuat
                document.addEventListener('DOMContentLoaded', function () {
                showContent('tambah-artikel');
                });

                function setActiveMenu(element) {
                document.querySelectorAll('ul li').forEach((item) => {
                item.classList.remove('font-bold', 'text-green-950');
                });
                element.classList.add('font-bold', 'text-green-950');
                }";
            $this->view('templates/header', $data);
            $this->view('pageAdmin/index', $data);
            $this->view('templates/footer');
            $this->id = $_SESSION['user'];
        }
        else{
            header('Location: ' . BASEURL . 'pageAdmin/loginAdmin');
        }
        
    }
    public function loginAdmin($data = []){
        $data['judul'] = 'LoginAdmin';
        $data['css'] = 'signIn';
        $this->view('templates/header', $data);
        $this->view('pageAdmin/loginAdmin', $data);
        $this->view('templates/footer');
    }
    public function submitAdmin(){
        session_start();
        $data = $_POST;
        if($this->model('admin_model')->validate($data)){
            $_SESSION['admin'] = $this->model('admin_model')->getId($data['username']);
            header('Location: '. BASEURL.'pageAdmin');
        }
    }
    public function tambahArtikel(){
        session_start();
        $data = $_POST;
        $data ['id_admin'] = $_SESSION['admin'];
        $this->model('artikel')->tambahArtikel($data);
        header('Location: '. BASEURL.'pageAdmin');
    }
    public function hapusArtikel(){
        $id = $_POST['ARTIKEL_ID'];
        $this->model('artikel')->hapusArtikel($id);
        header('Location: '. BASEURL.'pageAdmin');
    }
    public function hapusLaporanKomentar(){
        $id = $_POST['komentar_id'];
        $this->model('komentar')->hapusKomentar($id);
        header('Location: '. BASEURL.'pageAdmin');
    }
    public function ignoreLaporanKomentar(){
        $id = $_POST['komentar_id'];
        $this->model('komentar')->ignoreKomentar($id);
        header('Location: '. BASEURL.'pageAdmin');
    }
    public function hapusLaporanPostingan(){
        $id = $_POST['postingan_id'];
        $this->model('postingan')->hapuspostingan($id);
        header('Location: '. BASEURL.'pageAdmin');
    }
    public function ignoreLaporanPostingan(){
        $id = $_POST['postingan_id'];
        $this->model('postingan')->ignorePostingan($id);
        header('Location: '. BASEURL.'pageAdmin');
    }
}
?>