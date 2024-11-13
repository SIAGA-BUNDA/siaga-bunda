<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';
class signUp extends controller{
    public function index(){
        $data['judul'] = 'Sign Up';
        $data['css'] = 'signUp';
        // $data['user'] = $this->model('User_model')->getUsers();
        $this->view('templates/header', $data);
        $this->view('signUp/index', $data);
        $this->view('templates/footer');
    }
    public function tambah(){
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $token = md5($email.date('Y-m-d H:i:s'));
        //email
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'cv.siaga.bunda@gmail.com';                     //SMTP username
            $mail->Password   = 'smhx iibz odun vxap';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('SIAGA-BUNDA@example.com', 'Verifikasi Akun Siaga Bunda');
            $mail->addAddress($email, $nama);     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Verifikasi akun siaga bunda anda';
            $mail->Body    = 'Hi '. $nama . " Terimakasih telah mendaftar pada website siaga bunda.<br>
            Silahkan verifikasi akun anda pada link dibawah ini<br>
            <a href='". BASEURL. "/signUp/verifikasi/". $token. "'>Verifikasi Akun</a>";
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if($mail->send()){
                //tambah ke db
                $this->model('User_model')->tambahUser($_POST, $token);
                header('Location: '. BASEURL. '/signIn');
            }
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    public function verifikasi($token){
        $dbToken = $this->model('User_model')->getIdByToken($token);
        $this->model('User_model')->updateRegis($dbToken);
        header('Location: '. BASEURL. '/signIn');
    }
}