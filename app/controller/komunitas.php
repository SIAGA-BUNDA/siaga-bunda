<?php
class komunitas extends Controller
{
  private $id;
  public function index()
  {
    session_start();
    if (isset($_SESSION['user'])) {
      $data['judul'] = 'Komunitas';
      $data['css'] = 'sebelumLogin';
      $data['isiPostingan'] = $this->model('postingan')->getIsiPostingan();
      $data['postingan'] = $this->model('postingan')->getAllPostingan();
      $data['commentCount'] = $this->model('komentar')->getCommentCount();
      $data['script'] = BASEURL . 'script/komunitas.js';
      $this->view('templates/header', $data);
      $this->view('komunitas/index', $data);
      $this->view('templates/footer');
      $this->id = $_SESSION['user'];
    } else {
      header('Location: ' . BASEURL . 'signIn');
    }
  }
  public function tambahPostingan()
  {
    session_start();
    $data = $_POST;
    $this->model('postingan')->tambahPostingan($data, $_SESSION['user']);
    header('Location: ' . BASEURL . 'komunitas');
  }
  public function tambahKomentar()
  {
    session_start();
    if (isset($_SESSION['user'])) {
      $data = $_POST;
      $this->model('komentar')->tambahKomentar($data, $_SESSION['user']);
      header('Location: ' . BASEURL . 'komunitas');
    } else {
      header('Location: ' . BASEURL . 'signIn');
    }
  }
  // Di controller, tambahkan debugging:
  public function addLike($id)
  {
    try {
      $result = $this->model('postingan')->addLike($id);
      header('Content-Type: application/json');
      echo json_encode(['jumlah_suka' => $result]);
      exit;
    } catch (Exception $e) {
      header('Content-Type: application/json');
      echo json_encode(['error' => $e->getMessage()]);
      exit;
    }
  }
  public function search()
  {
    session_start();
    if (isset($_SESSION['user'])) {
      $data['judul'] = 'Komunitas';
      $data['css'] = 'sebelumLogin';
      if (isset($_POST['search'])) {
        $searchInput = $_POST['search'];
        $data['isiPostingan'] = $this->model('postingan')->getIsiPostinganBySearch($searchInput);
        $data['postingan'] = $this->model('postingan')->getAllPostinganBySearch($searchInput);
        $data['commentCount'] = $this->model('komentar')->getCommentCountBySearch($searchInput);
        $data['script'] = BASEURL . 'script/komunitas.js';
        $this->view('templates/header', $data);
        $this->view('komunitas/index', $data);
        $this->view('templates/footer');
        $this->id = $_SESSION['user'];
      }

    } else {
      header('Location: ' . BASEURL . 'signIn');
    }
  }
  public function addLaporanPostingan()
  {
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = $_POST;
      $data['id_user'] = $_SESSION['user'];
      $this->model('laporan')->addLaporanPostingan($data);
      header('Location: ' . BASEURL . 'komunitas');
    }else{
      
    }
  }
  public function komentar($id)
  {
    session_start();
    if (isset($_SESSION['user'])) {
      $data['id_postingan'] = $id;
      $data['judul'] = 'Komentar';
      $data['css'] = 'sesudahLogin';
      $data['postingan'] = $this->model('postingan')->getAllPostinganById($id);
      $data['isi_postingan'] = $this->model('postingan')->getIsiPostinganById($id);
      $data['commentCount'] = $this->model('komentar')->getCommentCountById($id);
      $data['komentar'] = $this->model('komentar')->getAllKomentarById($id);
      $data['isiKomentar'] = $this->model('komentar')->getIsiKomentarById($id);
      $this->view('templates/header', $data);
      $this->view('komentar/index', $data);
      $this->view('templates/footer');
      $this->id = $_SESSION['user'];
    } else {
      header('Location: ' . BASEURL . 'signIn');
    }
  }

}





