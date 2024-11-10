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
            echo "<br> Query: " . $query . "<br>"; 
            $this->db->query($query);
            $this->db->execute();
            return $this->db->resultSet();
    }
}