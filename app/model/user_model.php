<?php
class user_model {
    private $table = 'USERACCOUNT';
    private $db;
    public function __construct(){
        $this->db = new database;
    }
    public function getUsers() {
            $query = "select * from " . $this->table ;
            $this->db->query($query);
            return $this->db->resultSet();
    }
    public function getIdByToken($token) {
        $query = "select IDUSER from " . $this->table . " where TOKEN = :token";
        $this->db->query($query);
        $this->db->bind('token', $token);
        return $this->db->single()['IDUSER'];
}
    public function updateRegis($id){
        $query = "UPDATE ". $this->table. " SET is_register = '1' WHERE iduser = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
    }
    public function tambahUser($data, $token){
        $nama = $data['nama'];
        $password = $data['password'];
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $no_telepon = $data['no_telepon'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $email = $data['email'];
        $lmp = $data['lmp'];
        $query = "INSERT INTO " . $this->table . " (NAMA, PASSWORD, no_telepon, TANGGALLAHIR, LMP, EMAIL, is_register, token) VALUES (:nama, :password, :no_telepon, TO_DATE(:tanggal_lahir, 'YYYY-MM-DD'), TO_DATE(:lmp, 'YYYY-MM-DD'), :email, '0', :token)";
        $this->db->query($query);
        $this->db->bind('nama', $nama);
        $this->db->bind('password', $hashed_password);
        $this->db->bind('no_telepon', $no_telepon);
        $this->db->bind('tanggal_lahir', $tanggal_lahir);
        $this->db->bind('lmp', $lmp);
        $this->db->bind('email', $email);
        $this->db->bind('token', $token);
        $this->db->execute();
    }
    
}