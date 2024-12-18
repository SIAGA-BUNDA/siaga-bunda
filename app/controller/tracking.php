<?php
class tracking extends Controller
{
    private $id;
    public function index()
    {
        session_start();

        if (isset($_SESSION['user'])) {
            $data['pertanyaan'] = [
                "2" => [
                    "Apakah Ada Merasakn Demam Lebih dari Dua Hari Dalam Minggu Ini?",
                    "Tidak ada",
                    "Ada"
                ],
                "3" => [
                    "Apakah Ada Merasakan Pusing/Sakit Kepala Berat di Minggu Ini?",
                    "Tidak ada",
                    "Ada"
                ],
                "4" => [
                    "Apakah Ada Merasakan Sulit Tidur/Cemas Berlebih di Minggu Ini?",
                    "Tidak ada",
                    "Ada"
                ],
                "5" => ["Apakah Ada Merasakan Jantung Berdebar debar atau
                        Nyeri di Dada Minggu Ini?",
                    "Tidak ada",
                    "Ada"
                ],
                "6" => [
                    "Apakah Ada Batuk Lebih Dari 2 Minggu atau Kontak Serumah Dengan Penderita TB Minggu Ini?",
                    "Tidak ada",
                    "Ada"
                ],
                "7" => [
                    "Apakah Ada Gerakan Janin Lebih Dari 10 kali dalam 12 jam Minggu Ini?",
                    "Tidak Ada/Kurang dari 10 kali",
                    "Ada/lebih dari 10 kali"
                ],
                "8" => [
                    "Apakah Ada Nyeri Perut Hebat Dalam Minggu Ini?",
                    "Tidak ada",
                    "Ada"
                ],
                "9" => [
                    "Apakah Ada Keluar Cairan dari Jalan Lahir Dalam Minggu Ini?",
                    "Tidak ada/Ada dalam jumlah sedikit",
                    "Sangat Banyak/Berbau"
                ],
                "10" => [
                    "Apakah Ada Merasakn Sakit Saat Kencing Dalam Minggu Ini?",
                    "Tidak Ada",
                    "Sakit saat kencing atau keluar keputihan"
                ],
                "11" => [
                    "Apakah Ada Merasakn Diare Berulang Dalam Minggu Ini?",
                    "Tidak ada",
                    "Ada"
                ]

            ];
            $data['judul'] = 'Home';
            $data['css'] = 'sebelumLogin';
            $this->view('templates/header', $data);
            $this->view('tracking/index', $data);
            $this->view('templates/footer');
            $this->id = $_SESSION['user'];
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function input()
    {
        session_start();
        if (isset($_SESSION['user'])) {
            $this->id = $_SESSION['user'];
        }
        $data = $_POST;
        echo ($this->id);
        $data['gejala'] = isset($_POST['inputGejala']) ? implode(', ', $_POST['inputGejala']) : '';
        echo $data['gejala'];
        $this->model('User_tracking')->tambah($data, $this->id);
    }
}
?>