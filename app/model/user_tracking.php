<?php
class User_tracking extends model
{
    private $table = 'DATA_MINGGUAN';

    private $db, $data;

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
    function getRecords ($id) {
        $query = "SELECT * FROM ". $this->table . " where id_user = '". $id . "'";
        // $this->db->bind(':id', $id);
        $this->db->query($query);
        return $this->db->resultSet();
    }

    function getRecord ($id,$week) {
        $query = "SELECT * FROM ". $this->table . " where id_user = '". $id . "' and minggu = '". $week . "'";
        $this->db->query($query);
        return $this->db->single();
    }

    function getSymptoms ($id) {
        $query = "SELECT minggu, gejala FROM ". $this->table . " where id_user = '". $id . "'";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    function getGejala ($id,$week) {
        $query = "SELECT gejala FROM ". $this->table . " where id_user = '". $id . "' and minggu = '". $week . "'";
        $this->db->query($query);
        $gejala = $this->db->single();
        return explode(',', $gejala['GEJALA']);
    }
    
  function getPreRecord($id) {
        $query = "SELECT PRA_BERAT, TINGGI_BADAN FROM useraccount where id_user = '". $id . "'";
        // $this->db->bind(':id', $id);
        $this->db->query($query);
        return $this->db->single();
    }
}