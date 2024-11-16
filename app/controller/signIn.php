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
    public function forgotPassword()
    {
        $data['judul'] = 'Forgot Password';
        $data['css'] = 'forgotPassword';
        $this->view('templates/header', $data);
        $this->view('signIn/forgotPassword');
        $this->view('templates/footer');
    }
    public function resetPassword()
    {
        $data['judul'] = 'Reset Password';
        $data['css'] = 'resetPassword';
        $this->view('templates/header', $data);
        $this->view('signIn/resetPassword');
        $this->view('templates/footer');
    }

    public function submit()
    {
        $data = $_POST;
        $model = $this->model('user_model', $data);
        $data['builder'] = $this->builder;
        if ($model->validate('signIn')) {
            // echo $_SESSION['phrase'];  
            // echo $data['user_captcha'];
            if($_SESSION['phrase'] === $data['user_captcha']) {
                header("Location: " . BASEURL . "home");
            }
            else {   
                $this->index($data);
            }
        } else {
            $data['errors'] = $model->errors;
            $this->index($data);
        }

    }
}