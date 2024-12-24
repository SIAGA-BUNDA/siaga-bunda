<?php
class pageAdmin extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['admin'])) {
            $data['judul'] = 'Page Admin';
            $data['css'] = 'pageAdmin';
            $username = $_SESSION['admin'];
            $data['artikel'] = $this->model('artikel_model')->getAllArtikel();
            $data['isi'] = $this->model('artikel_model')->getIsiArtikel();
            $data['user'] = $this->model('User_model')->getUsers();
            $data['username'] = $this->model('Admin_model')->getName($username);
            $data['role'] = $this->model('Admin_model')->getRole($username);
            $data['laporanPostingan'] = $this->model('Laporan')->getLaporanPostingan();
            $data['laporanKomentar'] = $this->model('Laporan')->getLaporanKomentar();
            $data['isiPostingan'] = $this->model('Laporan')->getIsiPostingan();
            $data['isiKomentar'] = $this->model('Laporan')->getIsiKomentar();
            $data['script'] = BASEURL . 'script/pageAdmin.js';
            $this->view('templates/header', $data);
            $this->view('pageAdmin/index', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . 'pageAdmin/loginAdmin');
        }

    }
    public function loginAdmin($data = [])
    {
        $data['judul'] = 'LoginAdmin';
        $data['css'] = 'signIn';
        $this->view('templates/header', $data);
        $this->view('pageAdmin/loginAdmin', $data);
        $this->view('templates/footer');
    }
    public function submitAdmin()
    {
        session_start();
        $data = $_POST;
        if ($this->model('Admin_model')->validate($data)) {
            $_SESSION['admin'] = $this->model('Admin_model')->getId($data['username']);
            header('Location: ' . BASEURL . 'pageAdmin');
        } else {
            header('Location: ' . BASEURL . 'pageAdmin/loginAdmin');
        }
    }
    public function tambahArtikel()
    {
        session_start();
        if (isset($_SESSION['admin'])) {
            $data = $_POST;

            // Nama file dan path sementara
            $file_name = $_FILES['image']['name'];
            $tempname = $_FILES['image']['tmp_name'];

            // Direktori tujuan
            $folder = 'img/artikel/';

            // Cek apakah folder tujuan ada, jika tidak buat folder
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            // Cek apakah folder dapat ditulis
            if (!is_writable($folder)) {
                chmod($folder, 0777);
            }

            // Path tujuan lengkap
            $destination_path = $folder . $file_name;

            // Pindahkan file dari path sementara ke path tujuan
            if (move_uploaded_file($tempname, $destination_path)) {
                $data['id_admin'] = $_SESSION['admin'];
                $data['path'] = $destination_path;

                $this->model('artikel_model')->tambahArtikel($data);
                header('Location: ' . BASEURL . 'pageAdmin');

                // Simpan path ke variabel atau database
            } else {
                echo "Gagal mengunggah file.";
            }

            // Simpan data lainnya ke database

        } else {
            header('Location: ' . BASEURL . 'pageAdmin');
        }
    }
    public function hapusArtikel()
    {
        $id = $_POST['ARTIKEL_ID'];
        $this->model('artikel_model')->hapusArtikel($id);
        header('Location: ' . BASEURL . 'pageAdmin');
    }
    public function hapusLaporanKomentar()
    {
        $id = $_POST['komentar_id'];
        $this->model('Komentar')->hapusKomentar($id);
        header('Location: ' . BASEURL . 'pageAdmin');
    }
    public function ignoreLaporanKomentar()
    {
        $id = $_POST['komentar_id'];
        $this->model('Komentar')->ignoreKomentar($id);
        header('Location: ' . BASEURL . 'pageAdmin');
    }
    public function hapusLaporanPostingan()
    {
        $id = $_POST['postingan_id'];
        $this->model('postingan')->hapuspostingan($id);
        header('Location: ' . BASEURL . 'pageAdmin');
    }
    public function ignoreLaporanPostingan()
    {
        $id = $_POST['postingan_id'];
        $this->model('postingan')->ignorePostingan($id);
        header('Location: ' . BASEURL . 'pageAdmin');
    }
}
?>