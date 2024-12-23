<?php
class tracking extends Controller
{
    public function index($week)
    {
        session_start();
        if (isset($_SESSION['user'])) {
            $id = $_SESSION['user'];
            $this->model('user_tracking')->getRecord($id, $week);
            if (empty($this->model('user_tracking')->getRecord($id, $week))) {
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $data = $_POST;
                    $pattern = '/\b(on|[0-9]+(?:\.[0-9]+)?)\b/';
                    $trimmedArray = array_filter($data, fn($value) => !preg_match($pattern, $value));
                    $gejala = implode(",", $trimmedArray);
                    $berat = $_POST['berat_badan'];
                    $this->model('user_tracking')->addTracking( $berat,$week, $gejala, $id);
                    header('Location: ' . BASEURL . '/Home');
                }
                $data['pertanyaan'] = [
                    "2" => [
                        "Apakah Ada Merasakn Demam Lebih dari Dua Hari Dalam Minggu Ini?",
                        "Tidak ada",
                        "Ada",
                        "Demam"
                    ],
                    "3" => [
                        "Apakah Ada Merasakan Pusing/Sakit Kepala Berat di Minggu Ini?",
                        "Tidak ada",
                        "Ada",
                        "Pusing"
                    ],
                    "4" => [
                        "Apakah Ada Merasakan Sulit Tidur/Cemas Berlebih di Minggu Ini?",
                        "Tidak ada",
                        "Ada",
                        "Sulit Tidur"
                    ],
                    "5" => ["Apakah Ada Merasakan Jantung Berdebar debar atau
                            Nyeri di Dada Minggu Ini?",
                        "Tidak ada",
                        "Ada",
                        "Jantung Berdebar"
                    ],
                    "6" => [
                        "Apakah Ada Batuk Lebih Dari 2 Minggu atau Kontak Serumah Dengan Penderita TB Minggu Ini?",
                        "Tidak ada",
                        "Ada",
                        "Risiko TB"
                    ],
                    "7" => [
                        "Apakah Ada Gerakan Janin Lebih Dari 10 kali dalam 12 jam Minggu Ini?",
                        "Tidak Ada/Kurang dari 10 kali",
                        "Ada/lebih dari 10 kali",
                        "Gerakan Janin"
                    ],
                    "8" => [
                        "Apakah Ada Nyeri Perut Hebat Dalam Minggu Ini?",
                        "Tidak ada",
                        "Ada",
                        "Nyeri Perut"
                    ],
                    "9" => [
                        "Apakah Ada Keluar Cairan dari Jalan Lahir Dalam Minggu Ini?",
                        "Tidak ada/Ada dalam jumlah sedikit",
                        "Sangat Banyak/Berbau",
                        "Keluar Cairan"
                    ],
                    "10" => [
                        "Apakah Ada Merasakn Sakit Saat Kencing Dalam Minggu Ini?",
                        "Tidak Ada",
                        "Sakit saat kencing atau keluar keputihan",
                        "Sakit Kencing",
                    ],
                    "11" => [
                        "Apakah Ada Merasakn Diare Berulang Dalam Minggu Ini?",
                        "Tidak ada",
                        "Ada",
                        "Diare"
                    ]

                ];
                $data['judul'] = 'Home';
                $data['css'] = 'sebelumLogin';
                $this->view('templates/header', $data);
                $this->view('tracking/index', $data);
                $this->view('templates/footer');
            } else {
                header('Location: ' . BASEURL . 'home');
            }
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }
    }
}
?>