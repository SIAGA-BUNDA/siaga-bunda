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
        $this->view('templates/header', $data);
        $this->view('resetPassword/index', $data);
        $this->view('templates/footer');
    }

    public function createPassword($token, $data = [])
    {
        $data['token'] = $token;
        $data['judul'] = 'Reset Password';
        $data['css'] = 'resetPassword';
        $this->view('templates/header', $data);
        $this->view('resetPassword/formReset', $data);
        $this->view('templates/footer');
    }

    public function submit_index()
    {
        $model = $this->model('user_model', $_POST);
        $user = $model->getUserByEmail($_POST['email']);
        if ($model->validate('resetIndex')) {
            $email = $user['EMAIL'];
            $nama = $user['NAMA'];
            $token = $user['TOKEN'];
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
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            $data['errors'] = $model->errors;
            $this->index($data);
        }
    }

    public function submit_createPassword($token)
    {
        $data = $_POST;
        $model = $this->model('user_model', $data);
        if ($model->validate('resetCreatePassword')) {
            $password = password_hash($model->password, PASSWORD_BCRYPT);
            $model->updatePassword($token, $password);
            header("Location: " . BASEURL . "signIn");
        } else {
            $data['errors'] = $model->errors;
            $this->createPassword($token, $data);
        }
    }
}