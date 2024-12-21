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
    var_dump($data);
    $this->model('postingan')->tambahPostingan($data, $_SESSION['user']);
    header('Location: ' . BASEURL . 'komunitas');
  }
  public function tambahKomentar()
  {
    session_start();
    $data = $_POST;
    $this->model('komentar')->tambahKomentar($data, $_SESSION['user']);
    var_dump($data);
    var_dump($_SESSION['user']);
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

}

