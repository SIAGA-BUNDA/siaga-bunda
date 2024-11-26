<?php
use Gregwar\Captcha\CaptchaBuilder;
//Load Composer's autoloader
require '../vendor/autoload.php';
class signIn extends controller
{
    private $builder ;
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
            if(1<2) {
                $_SESSION['user'] = $model->getUserByEmail($data['email'])['ID_USER'];
                header("Location: " . BASEURL . "Home");
            }
            else {   
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