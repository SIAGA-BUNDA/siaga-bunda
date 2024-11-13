<?php
class user_model extends model
{
    private $table = 'USERACCOUNT';
    private $db;
    public function __construct()
    {
        $this->db = new database;
    }
    public function getUsers()
    {
        $query = "select * from " . $this->table;
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getIdByToken($token)
    {
        $query = "select ID_USER from " . $this->table . " where TOKEN = :token";
        $this->db->query($query);
        $this->db->bind('token', $token);
        return $this->db->single()['ID_USER'];
    }
    public function updateRegis($id)
    {
        $query = "UPDATE " . $this->table . " SET is_register = '1' WHERE ID_USER = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
    }
    public function tambahUser($data, $token)
    {
        var_dump($data);
        $nama = $data['nama'];
        $password = $data['password'];
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $no_telepon = $data['no_telepon'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $email = $data['email'];
        $lmp = $data['lmp'];
        $tinggi_badan = $data['tinggi_badan'];
        $query = "INSERT INTO " . $this->table . " (nama, password, no_telepon, tanggal_lahir, lmp, email, is_register, token, tinggi_badan) VALUES (:nama, :password, :no_telepon, TO_DATE(:tanggal_lahir, 'YYYY-MM-DD'), TO_DATE(:lmp, 'YYYY-MM-DD'), :email, '0', :token, :tinggi_badan)";
        $this->db->query($query);
        $this->db->bind('nama', $nama);
        $this->db->bind('password', $hashed_password);
        $this->db->bind('no_telepon', $no_telepon);
        $this->db->bind('tanggal_lahir', $tanggal_lahir);
        $this->db->bind('lmp', $lmp);
        $this->db->bind('email', $email);
        $this->db->bind('token', $token);
        $this->db->bind('tinggi_badan', $tinggi_badan);
        $this->db->execute();
    }

    public function rules(): array
    {
        return [
            'nama' => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 30]],
            'password' => [self::RULE_REQUIRED],
            'no_telepon' => [self::RULE_REQUIRED, self::RULE_NUMBER],
            'tanggal_lahir' => [self::RULE_REQUIRED],
            'lmp' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL]

        ];
    }
}