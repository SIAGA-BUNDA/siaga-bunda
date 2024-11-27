<?php
class Admin_model{
    private $table = 'ADMIN';

    private $db, $data;

    public function __construct($data = [])
    {
        $this->db = new database();
    }
    public function validate($data){
        $username = $data['username'];
        $password = $data['password'];
        $query = "SELECT * FROM ". $this->table. " WHERE username = :username AND password = :password";
        $this->db->query($query);
        $this->db->bind(':username', $username);
        $this->db->bind(':password', $password);
        $result = $this->db->single();
        return $result ? true : false;
    }
    public function getName($id){
        $query = "SELECT NAMA FROM " . $this->table . " WHERE admin_id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->single()['NAMA'];
    }
    public function getRole($id){
        $query = "SELECT ROLE FROM " . $this->table . " WHERE admin_id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->single()['ROLE'];
    }
    public function getId($username){
        $query = "SELECT ADMIN_ID FROM ". $this->table . " WHERE username = :username";
        $this->db->query($query);
        $this->db->bind(':username', $username);
        return $this->db->single()['ADMIN_ID'];
    }
}