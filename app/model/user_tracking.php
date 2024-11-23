<?php
class user_tracking extends model
{
    private $table = 'DATA_MINGGUAN';

    private $db, $data;

    public $id_user, $password, $nama, $email, $no_telepon, $tanggal_lahir, $lmp, $token, $tinggi_badan, $confirmPassword;
    public function __construct($data = [])
    {
        $this->db = new database();
    }
    public function rules($page): array
    {
        //belum rules
    }
    public function tambah($data, $id){
        $week = $this->getWeek($id);
        var_dump($week);
        $berat_badan = $data['berat_badan'];
        $tinggi_badan = $data['tinggi_badan'];
        $gejala = $data['gejala'];
        $query = "INSERT INTO ". $this->table . "(berat_badan, tinggi_badan, week, gejala, id_user) VALUES (:berat_badan, :tinggi_badan, :week, :gejala, :id)";
        $this->db->query($query);
        $this->db->bind(':berat_badan', $berat_badan);
        $this->db->bind(':tinggi_badan', $tinggi_badan);
        $this->db->bind(':week', $week);
        $this->db->bind(':gejala', $gejala);
        $this->db->bind(':id', $id);
        $this->db->execute();
        header('Location: ' . BASEURL . '/Home');
    }

    function getWeek ($id) {
        $query = "SELECT floor((SYSDATE - (LMP + 7)) / 7) AS WEEK FROM useraccount where id_user = '". $id . "'";
        $this->db->query($query);
        return $this->db->single()['WEEK'];
    }
}