<?php
class home extends Controller
{
    private $id;
    public function index()
    {
        session_start();
        if (isset($_SESSION['user'])) {
            $data['judul'] = 'Home';
            $data['css'] = 'sebelumLogin';
            $this->view('templates/header', $data);
            $this->view('home/index');
            $this->view('templates/footer');
            $this->id = $_SESSION['user'];
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }
    }

    public function profil()
    {
        session_start();
        if (isset($_SESSION['user'])) {
            $data['judul'] = 'Profil';
            $data['css'] = 'sesudahLogin';
            $this->view('templates/header', $data);
            $this->view('home/profil');
            $this->view('templates/footer');
            $this->id = $_SESSION['user'];
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function sesudahLogin()
    {
        session_start();
        require '../vendor/autoload.php';
        if (isset($_SESSION['user'])) {
            $data['judul'] = 'Home';
            $data['css'] = 'sesudahLogin';

            $this->id = $_SESSION['user'];
            $preRecord = $this->model('user_tracking')->getPreRecord($this->id);
            $records = $this->model('user_tracking')->getRecords($this->id);
            $data['week'] = $this->model('user_tracking')->getWeek($this->id);

            //Rekomendasi Skrining
            switch (true) {
                case $data['week'] >= 4 && $data['week'] <= 6:
                    $data['skrinning'] = ["title" => "Minggu 4~6", "category" => "Tes Konfirmasi Kehamilan", "medical test" => "konfirmasiKehamilan"];
                    break;
                case $data['week'] < 4 || ($data['week'] < 10 && $data['week'] > 6):
                    $data['skrinning'] = ["title" => "Minggu 0~13", "category" => "Tes Kehamilan Dini", "medical test" => "kehamilanDini"];
                    break;
                case $data['week'] >= 10 && $data['week'] <= 13:
                    $data['skrinning'] = ["title" => "Minggu 10~13", "category" => "Tes Kelainan Janin Trimester 1", "medical test" => "trimester1"];
                    break;
                case $data['week'] > 13 && $data['week'] <= 20:
                    $data['skrinning'] = ["title" => "Minggu 15~20", "category" => "Tes Kelainan Janin Trimester 2", "medical test" => "trimester2"];
                    break;
                case $data['week'] > 20 && $data['week'] <= 28:
                    $data['skrinning'] = ["title" => "Minggu 24~28", "category" => "Tes Diabetes Gestasional", "medical test" => "diabetesGestasional"];
                    break;
                case $data['week'] > 28 && $data['week'] <= 36:
                    $data['skrinning'] = ["title" => "Minggu 34~36", "category" => "Tes Prenetal yang Komprehensif", "medical test" => "prenetal"];
                    break;
            }

            $data['records'] = $records;
            $data['preRecord'] = $preRecord;

            $PreImt = round($preRecord['PRA_BERAT'] / ($preRecord['TINGGI_BADAN'] * $preRecord['TINGGI_BADAN'] / 10000), 2);
            if ($PreImt < 18.5) {
                $data['category'] = 'underweight';
            } else if ($PreImt >= 18.5 && $PreImt <= 24.9) {
                $data['category'] = 'normal';
            } else if ($PreImt >= 25 && $PreImt <= 29.9) {
                $data['category'] = 'over';
            } else if ($PreImt >= 30) {
                $data['category'] = 'obese';
            }

            if (!empty($records)) {
                $lastRecord = end($records);
                $data['berat_badan'] = $lastRecord['BERAT_BADAN'];
                $data['imt'] = round($lastRecord['BERAT_BADAN'] / ($lastRecord['TINGGI_BADAN'] * $lastRecord['TINGGI_BADAN'] / 10000), 1);
                $data['kenaikan_berat'] = $lastRecord['BERAT_BADAN'] - $preRecord['PRA_BERAT'];
            } else {
                $data['berat_badan'] = $preRecord['PRA_BERAT'];
                $data['imt'] = round($preRecord['PRA_BERAT'] / ($preRecord['TINGGI_BADAN'] * $preRecord['TINGGI_BADAN'] / 10000), 1);
                $data['kenaikan_berat'] = 0;
            }

            $this->view('templates/header', $data);
            $this->view('home/sesudahLogin', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }
    }

    function getTable()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            session_start();
            $week = $_POST['week'];
            $id = $_SESSION['user'];
            $record = $this->model('user_tracking')->getGejala($id, $week);
            echo $this->view('report/table', $record);
        } else {
            header('Location: ' . BASEURL . 'home/sesudahLogin');
        }
    }

    public function pemantauan_kondisi()
    {
        session_start();
        require '../vendor/autoload.php';

        $data['symptoms'] = $this->model('user_tracking')->getSymptoms($_SESSION['user']);
        $data['headers'] = [
            "Demam Lebih dari Dua Hari",
            "Pusing/Sakit Kepala Berat",
            "Sulit Tidur/Cemas Berlebih",
            "Jantung Berdebar/Nyeri di Dada",
            "Risiko TB",
            "Gerakan Janin",
            "Nyeri Perut Hebat",
            "Keluar Cairan dari jalan lahir",
            "Sakit Saat Kencing",
            "Diare Berulang"
        ];

        $data['subHeaders'] = [
            ["Tidak ada", "Ada"],
            ["Tidak ada", "Ada"],
            ["Tidak ada", "Ada"],
            ["Tidak ada", "Ada"],
            ["Tidak ada batuk >2 minggu/Kontak serumah dengan penderita TB", "Batuk >2 minggu/Kontak serumah dengan penderita TB"],
            ["Tidak ada atau <10 kali dalam 12 jam", ">10 kali dalam 12 jam"],
            ["Tidak ada", "Ada"],
            ["Tidak ada/ Ada dalam jumlah sedikit dan tidak berbau", "Sangat banyak atau berbau"],
            ["Tidak ada", "Ada"],
            ["Tidak ada", "Ada"]
        ];

        // Buat instance TCPDF
        $mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);

        // Buffer the following html with PHP so we can store it to a variable later
        ob_start();

        // This is where your script would normally output the HTML using echo or print
        echo $this->view('home/pemantauan_kondisi', $data);

        // Now collect the output buffer into a variable
        $html = ob_get_contents();
        ob_end_clean();

        // send the captured HTML from the output buffer to the mPDF class for processing
        $mpdf->WriteHTML($html);
        $mpdf->Output();

    }

}