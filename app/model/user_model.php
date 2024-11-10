<?php
class user_model {
    private $table = 'USERACCOUNT';
    private $db;
    public function __construct(){
        $this->db = new database;
    }
    // public function getUsers(){
    //     $this->db->query('SELECT * FROM '. $this->table);
    //     return $this->db->resultSet();
    // }
    public function getUsers() {
            $query = "select * from " . $this->table ;
            $this->db->query($query);
            return $this->db->resultSet();
    }
    public function tambahUser($nama){
        $query = "insert into " . $this->table . "(nama) values ('" . $nama . "')";
        $this->db->query($query);
        $this->db->execute();
    }
}