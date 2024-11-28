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
}