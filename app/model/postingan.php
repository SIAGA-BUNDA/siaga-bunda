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
    public function getAllPostingan(){
        $query = "SELECT * FROM ". $this->table. " WHERE status = 'ok'";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getIsiPostingan(){
        $query = "SELECT POSTINGAN_ID FROM this->table";
        $this->db->query($query);
        $result = $this->db->resultSet();       
        $id = array_column($result, 'POSTINGAN_ID');
        foreach($id as $r) {
            $query = 'select ISI_POSTINGAN from POSTINGAN' ." where POSTINGAN_ID = '" . $r. "'";
            $this->db->query($query);
            $lobresult = $this->db->single()['ISI_POSTINGAN'];
              $lob = stream_get_contents($lobresult);
              $isi[] = $lob;
              unset($lob);
          }
          return $isi;
    }
}