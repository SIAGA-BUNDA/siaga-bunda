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
            $data['weightData'] = $this->model('user_tracking')->getDataWeight($this->id);
            $data['week'] = $this->model('user_tracking')->getWeek($this->id);
            if (isset($data['weightData'])) {
                $Imt = round($data['weightData'][0]['PRA_BERAT'] / ($data['weightData'][0]['TINGGI_BADAN'] ** 2 / 10000), 1);
                if ($Imt < 18.5) {
                    $data['category'] = 'underweight';
                } else if ($Imt >= 18.5 && $Imt <= 24.9) {
                    $data['category'] = 'normal';
                } else if ($Imt >= 25 && $Imt <= 29.9) {
                    $data['category'] = 'over';
                } else if ($Imt >= 30) {
                    $data['category'] = 'obese';
                }
            }

            $this->view('templates/header', $data);
            $this->view('home/sesudahLogin', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . 'signIn');
        }
    }
    public function generatePDF()
    {
        session_start();
        require '../vendor/autoload.php';

        // Cek apakah user sudah login
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'signIn');
            exit;
        }

        // Ambil data user
        $this->id = $_SESSION['user'];
        $data['weightData'] = $this->model('user_tracking')->getDataWeight($this->id);

        // Mulai membuat PDF
        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Nama Anda');
        $pdf->SetTitle('Contoh TCPDF');
        $pdf->SetSubject('Demo Pembuatan PDF');
        $pdf->SetKeywords('TCPDF, PDF, contoh, tabel');

        // Tambahkan halaman
        $pdf->AddPage();
        $pdf->SetFont('Helvetica', '', 12);

        // Tabel menggunakan HTML
        $html = '
    <h3>Contoh Tabel dengan TCPDF</h3>
    <table border="1" cellspacing="3" cellpadding="4">
        <thead>
            <tr>
                <th>Kolom 1</th>
                <th>Kolom 2</th>
                <th>Kolom 3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
            </tr>
            <tr>
                <td>Data 4</td>
                <td>Data 5</td>
                <td>Data 6</td>
            </tr>
        </tbody>
    </table>
    ';

        $pdf->writeHTML($html, true, false, true, false, '');

        // Outputkan PDF
        $pdf->Output('contoh_tcpdf.pdf', 'I');
    }

}