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
            $data['minggu_kehamilan'] = $this->model('user_tracking')->getWeek($this->id);
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
    
    function getTable() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            session_start();
            $week = $_POST['week'];
            $id = $_SESSION['user'];           
            $record = $this->model('user_tracking')->getGejala($id, $week);
            echo $this->view('report/table', $record);
        }else{
            header('Location: ' . BASEURL . 'home/sesudahLogin');
        }
    }

    public function generatePDF()
    {
        session_start();
        require '../vendor/autoload.php';

        // Buat instance TCPDF
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Nama Anda');
        $pdf->SetTitle('Tabel Kehamilan');
        $pdf->SetSubject('Tabel Kondisi Kehamilan');

        // Tambahkan halaman A4
        $pdf->AddPage();

        // Set font untuk teks
        $pdf->SetFont('Helvetica', '', 10);

        // Lebar total halaman cetak A4 dalam mm
        $totalWidth = 190; // Total lebar area cetak (A4 dengan margin default)

        // Data header kolom
        $headers = [
            "Demam Lebih dari Dua Hari",
            "Pusing/Sakit Kepala Berat",
            "Sulit Tidur/ Cemas Berlebih",
            "Jantung Berdebar-debar atau Nyeri di Dada",
            "Risiko TB",
            "Gerakan Janin",
            "Nyeri Perut Hebat",
            "Keluar Cairan dari Jalan Lahir",
            "Sakit Saat Kencing",
            "Diare Berulang"
        ];

        // Data isi tabel
        $data = [
            ["Tidak ada", "Ada", "Ada", "Tidak ada", "Batuk lebih dari 2 minggu atau kontak serumah dengan penderita TB", ">10 kali dalam 12 jam", "Ada", "Sangat banyak atau berbau", "Sakit saat kencing atau keluar keputihan atau gatal di daerah kemaluan", "Ada"]
        ];

        // Lebar kolom disesuaikan agar pas dengan A4
        $columnWidths = [20, 20, 20, 20, 20, 20, 20, 20, 20, 20]; // Total = 190mm

        // Tinggi baris
        $rowHeight = 15;

        // Warna header
        $pdf->SetFillColor(135, 206, 250); // Light blue
        $pdf->SetTextColor(0, 0, 0);       // Black text

        // Header tabel
        foreach ($headers as $key => $header) {
            $pdf->MultiCell($columnWidths[$key], $rowHeight, $header, 1, 'C', true, 0, '', '', true, 0, false, true, $rowHeight, 'M');
        }
        $pdf->Ln();

        // Warna isi tabel
        $pdf->SetFillColor(200, 230, 201); // Light green (untuk "Tidak ada")
        $pdf->SetTextColor(0, 0, 0);       // Black text

        // Isi tabel
        foreach ($data as $row) {
            foreach ($row as $key => $cell) {
                // Tentukan warna latar berdasarkan nilai
                if (strpos(strtolower($cell), 'tidak ada') !== false) {
                    $pdf->SetFillColor(200, 230, 201); // Hijau muda
                } else {
                    $pdf->SetFillColor(255, 205, 210); // Merah muda
                }
                $pdf->MultiCell($columnWidths[$key], $rowHeight, $cell, 1, 'C', true, 0, '', '', true, 0, false, true, $rowHeight, 'M');
            }
            $pdf->Ln();
        }

        // Outputkan PDF dalam ukuran A4
        $pdf->Output('tabel_kehamilan_a4.pdf', 'I');

    }

}