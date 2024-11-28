<?php
class Postingan{
    private $table = 'POSTINGAN';

    private $db, $data;

    public function __construct($data = [])
    {
        $this->db = new database();
    }
    public function hapusPostingan($id){
        $query = "UPDATE ". $this->table. " set status = 'hidden' where POSTINGAN_ID = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        $query = "UPDATE LAPORAN". " set status_laporan = 'Deleted' where POSTINGAN_ID = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
    }
    public function ignorePostingan($id){
        $query = "UPDATE ". $this->table. " set status = 'ok' where POSTINGAN_ID = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        $query = "UPDATE LAPORAN". " set status_laporan = 'Ignored' where POSTINGAN_ID = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
    }
}