<?php
class Komentar{
    private $table = 'KOMENTAR';

    private $db, $data;

    public function __construct($data = [])
    {
        $this->db = new database();
    }
    public function hapusKomentar($id){
        $query = "UPDATE ". $this->table. " set status = 'hidden' where KOMENTAR_ID = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        $query = "UPDATE LAPORAN". " set status_laporan = 'Deleted' where KOMENTAR_ID = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
    }
    public function ignoreKomentar($id){
        $query = "UPDATE ". $this->table. " set status = 'ok' where KOMENTAR_ID = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        $query = "UPDATE LAPORAN". " set status_laporan = 'Ignored' where KOMENTAR_ID = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
    }
    public function getAllKomentar(){
        $query = "SELECT * FROM ". $this->table;
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function tambahKomentar($data, $id) {
        $query = "CALL insert_komentar(:isi_komentar, :user_id, :postingan_id)";
        $this->db->query($query);
        $this->db->bind(':isi_komentar', $data['isi_komentar']);
        $this->db->bind(':user_id', $id);
        $this->db->bind(':postingan_id', $data['postingan_id']);
        $this->db->execute();
    }
    
}