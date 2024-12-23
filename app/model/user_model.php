<?php
class User_model extends model
{
    private $table = 'USERACCOUNT';

    private $db, $data;

    public $id_user, $password, $nama, $email, $no_telepon, $tanggal_lahir, $lmp, $token, $tinggi_badan, $confirmPassword, $berat_badan;
    public function __construct($data = [])
    {
        $this->db = new database();

        //get data user
        $this->id_user = $data['id_user'] ?? null;
        $this->nama = $data['nama'] ?? null;
        $this->password = $data['password'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->no_telepon = $data['no_telepon'] ?? null;
        $this->tanggal_lahir = $data['tanggal_lahir'] ?? null;
        $this->lmp = $data['lmp'] ?? null;
        $this->token = $data['token'] ?? null;
        $this->tinggi_badan = $data['tinggi_badan'] ?? null;
        $this->confirmPassword = $data['confirmPassword'] ?? null;
        $this->berat_badan = $data['berat_badan'] ?? null;
    }

    public function getUsers()
    {
        $query = "SELECT * from " . $this->table;
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getUserByEmail($email)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE EMAIL = :email";
        $this->db->query($query);
        $this->db->bind('email', $email);
        return $this->db->single();
    }

    public function getUserById($id){
        $query = "SELECT NAMA, EMAIL, NO_TELEPON, TO_CHAR(TANGGAL_LAHIR, 'YYYY-MM-DD') AS TANGGAL_LAHIR, TO_CHAR(LMP, 'YYYY-MM-DD') AS LMP, PRA_BERAT, TINGGI_BADAN from " . $this->table . " where ID_USER = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getUserByToken($token){
        $query = "SELECT EMAIL,TO_CHAR(TOKEN_EXPIRED, 'YYYY-MM-DD HH24:MI:SS') AS TOKEN_EXPIRED from " . $this->table . " where TOKEN = :token";
        $this->db->query($query);
        $this->db->bind('token', $token);
        return $this->db->single();
    }
    public function getIdByToken($token)
    {
        $query = "SELECT ID_USER from " . $this->table . " where TOKEN = :token";
        $this->db->query($query);
        $this->db->bind('token', $token);
        return $this->db->single()['ID_USER'];
    }

    public function getEmailByToken($token){
        $query = "SELECT EMAIL from " . $this->table . " where TOKEN = :token";
        $this->db->query($query);
        $this->db->bind('token', $token);
        return $this->db->single();
    }

    public function updateRegis($id)
    {
        $query = "UPDATE " . $this->table . " SET is_register = '1' WHERE ID_USER = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
    }
    public function updateUser($id, $nama, $no_telepon, $tanggal_lahir, $lmp, $tinggi_badan, $berat_badan){
        $query = "UPDATE ".$this->table ." SET NAMA = :nama, NO_TELEPON = :no_telepon, TANGGAL_LAHIR = TO_DATE(:tanggal_lahir, 'YYYY-MM-DD'), LMP = TO_DATE(:lmp, 'YYYY-MM-DD'), TINGGI_BADAN = :tinggi_badan, PRA_BERAT = :berat_badan WHERE ID_USER = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('nama', $nama);
        $this->db->bind('no_telepon', $no_telepon); 
        $this->db->bind('tanggal_lahir', $tanggal_lahir);
        $this->db->bind('lmp', $lmp);
        $this->db->bind('tinggi_badan', $tinggi_badan);
        $this->db->bind('berat_badan', $berat_badan);
        $this->db->execute();
    }

    public function updatePassword($token, $password)
    {
        $id = $this->getIdByToken($token);
        $query = "UPDATE " . $this->table . " SET password = :password WHERE ID_USER = :id";
        $this->db->query($query);
        $this->db->bind('password', $password);
        $this->db->bind('id', $id);
        $this->db->execute();
    }
    public function updateToken($email,$token, $token_expired)
    {
        $query = "UPDATE " . $this->table . " SET token = :token, token_expired = TO_DATE (:token_expired, 'YYYY-MM-DD HH24:MI:SS') WHERE EMAIL = :email";
        $this->db->query($query);
        $this->db->bind('token', $token);
        $this->db->bind('token_expired', $token_expired);
        $this->db->bind('email', $email);
        $this->db->execute();
    }

    public function tambahUser($data, $token)
    {
        $nama = $data['nama'];
        $password = $data['password'];
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $no_telepon = $data['no_telepon'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $email = $data['email'];
        $lmp = $data['lmp'];
        $tinggi_badan = $data['tinggi_badan'];
        $berat_badan = $data['berat_badan'];

        $query = "INSERT INTO " . $this->table . " (nama, password, no_telepon, tanggal_lahir, lmp, email, is_register, token, tinggi_badan, pra_berat) VALUES (:nama, :password, :no_telepon, TO_DATE(:tanggal_lahir, 'YYYY-MM-DD'), TO_DATE(:lmp, 'YYYY-MM-DD'), :email, '0', :token, :tinggi_badan, :berat_badan)";
        $this->db->query($query);
        $this->db->bind('nama', $nama);
        $this->db->bind('password', $hashed_password);
        $this->db->bind('no_telepon', $no_telepon);
        $this->db->bind('tanggal_lahir', $tanggal_lahir);
        $this->db->bind('lmp', $lmp);
        $this->db->bind('email', $email);
        $this->db->bind('token', $token);
        $this->db->bind('tinggi_badan', $tinggi_badan);
        $this->db->bind('berat_badan', $berat_badan);
        $this->db->execute();

    }
    
    public function rules($page): array
    {
        switch ($page) {
            case 'signIn':
                return [
                    'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [self::RULE_MAX, 'max' => 50], self::RULE_REGISTERED_EMAIL],
                    'password' => [self::RULE_REQUIRED, self::RULE_CORRECT_PASSWORD],
                ]
                ;
            case 'signUp':
                return [
                    'nama' => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 30]],
                    'password' => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 8]],
                    'no_telepon' => [self::RULE_REQUIRED, self::RULE_NUMBER],
                    'tanggal_lahir' => [self::RULE_REQUIRED, self::RULE_DATE],
                    'lmp' => [self::RULE_REQUIRED, self::RULE_DATE],
                    'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [self::RULE_MAX, 'max' => 50], self::RULE_UNIQUE_EMAIL],
                    'berat_badan' => [self::RULE_REQUIRED, self::RULE_NUMBER],
                    'tinggi_badan' => [self::RULE_REQUIRED, self::RULE_NUMBER]
                ];
            case 'resetCreatePassword':
                return [
                    "password" => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 8]],
                    "confirmPassword" => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 8], [self::RULE_MATCH, 'match' => 'password']]
                ];
            case 'resetIndex':
                return [
                    "email" => [self::RULE_REQUIRED, self::RULE_EMAIL, [self::RULE_MAX, 'max' => 50], self::RULE_REGISTERED_EMAIL]
                ];
        }
        return [];

    }
}