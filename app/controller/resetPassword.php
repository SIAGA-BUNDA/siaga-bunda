<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';
class ResetPassword extends Controller
{
    public function index($data = [])
    {
        $data['judul'] = 'Reset Password';
        $data['css'] = 'resetPassword';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = $this->model('User_model', $_POST);
            $user = $model->getUserByEmail($_POST['email']);
            if ($model->validate('resetIndex')) {
                $email = $user['EMAIL'];
                $nama = $user['NAMA'];
                $token = md5($email . date('Y-m-d H:i:s'));
                $token_expired = date('Y-m-d H:i:s', strtotime('+1 hours'));
                $model->updateToken($email, $token, $token_expired);
                //email
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
                    $mail->Username = 'cv.siaga.bunda@gmail.com';                     //SMTP username
                    $mail->Password = 'smhx iibz odun vxap';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure =

                    //Recipients
                    $mail->setFrom('SIAGA-BUNDA@example.com', 'Reset Password Siaga Bunda');
                    $mail->addAddress($email, $nama);     //Add a recipient

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Reset Password Siaga Bunda';
                    $mail->Body = 'HI ' . $nama . " <br>Anda telah melakukan reset password.<br>
                    Silahkan klik link dibawah ini untuk verifikasi reset password.<br>
                    <a href='" . BASEURL . "resetPassword/createPassword/" . $token . "'>Reset Password</a>";

                    $mail->send();
                    header('Location: ' . BASEURL . 'resetPassword/verifEmail/' . $token);
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            } else {
                $data['errors'] = $model->errors;
                $this->view('templates/header', $data);
                $this->view('resetPassword/index', $data);
                $this->view('templates/footer');
            }
        }
        $this->view('templates/header', $data);
        $this->view('resetPassword/index', $data);
        $this->view('templates/footer');
    }

    public function createPassword($token, $data = [])
    {
        $data['token'] = $token;
        $data['judul'] = 'Reset Password';
        $data['css'] = 'resetPassword';
        $user = $this->model('User_model')->getUserByToken($token);

        if ($user['TOKEN_EXPIRED'] > date('Y-m-d H:i:s')) {
            //jika dilakukan Submit CREATE NEW PASSWORD
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = $_POST;
                $model = $this->model('User_model', $data);
                if ($model->validate('resetCreatePassword')) {
                    $password = password_hash($model->password, PASSWORD_BCRYPT);
                    $model->updatePassword($token, $password);
                    header("Location: " . BASEURL . "signIn");
                } else {
                    $data['errors'] = $model->errors;
                    $this->createPassword($token, $data);
                }
            }
            //menampilkan form
            $this->view('templates/header', $data);
            $this->view('resetPassword/formReset', $data);
            $this->view('templates/footer');

        } else {
            echo "Link Tidak Valid";
        }
    }
    public function verifEmail($token)
    {
        $data['judul'] = 'verif Email';
        $data['css'] = 'signIn';
        $data['email'] = $this->model('User_model')->getEmailByToken($token);
        $this->view('templates/header', $data);
        $this->view('resetPassword/verifEmail', $data);
        $this->view('templates/footer');

    }
}