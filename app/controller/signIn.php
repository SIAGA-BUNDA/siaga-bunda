<?php
use Gregwar\Captcha\CaptchaBuilder;
//Load Composer's autoloader
require '../vendor/autoload.php';
class signIn extends controller
{
    private $builder;
    public function __construct()
    {
        session_start();
        $this->builder = new CaptchaBuilder();
        $this->builder->build();
    }
    public function index($data = [])
    {
        $data['judul'] = 'Login';
        $data['css'] = 'signIn';
        $data['builder'] = $this->builder;

        $_SESSION['phrase'] = $this->builder->getPhrase();

        $this->view('templates/header', $data);
        $this->view('signIn/index', $data);
        $this->view('templates/footer');

    }

    public function submit_login()
    {
        $data = $_POST;
        $model = $this->model('User_model', $data);
        $data['builder'] = $this->builder;
        if ($model->validate('signIn')) {
            if ($_SESSION['phrase'] === $data['user_captcha']) {
                $user = $model->getUserByEmail($data['email']);
                $_SESSION['user'] = $user['ID_USER'];
                $_SESSION['username'] = $user['NAMA'];
                header("Location: " . BASEURL . "home");
            } else {
                $this->index($data);
                ?>
                <script>
                    alert('Captcha salah!');
                </script>
                <?php
            }
        } else {
            $data['errors'] = $model->errors;
            $this->index($data);
        }

    }

}