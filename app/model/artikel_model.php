<?php
class Artikel_model
{
    private $table = 'ARTIKEL';

    private $db, $data;

    public function __construct($data = [])
    {
        $this->db = new database();
    }
    public function tambahArtikel($data)
    {
        $query = "INSERT INTO " . $this->table . " (judul_artikel, isi_artikel, admin_id) VALUES (:judul_artikel, :isi_artikel, :admin_id)";
        $this->db->query($query);
        $this->db->bind(':judul_artikel', $data['judul_artikel']);
        $this->db->bind(':isi_artikel', $data['isi_artikel']);
        $this->db->bind(':admin_id', $data['id_admin']);
        $this->db->execute();
    }
    public function getAllArtikel()
    {
        $query = "SELECT * FROM " . $this->table . " ORDER BY WAKTU DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getIsiArtikel()
    {
        $query = "SELECT ARTIKEL_ID FROM " . $this->table;
        $this->db->query($query);
        $result = $this->db->resultSet();
        $id = array_column($result, 'ARTIKEL_ID');
        foreach ($id as $r) {
            $query = 'select ISI_ARTIKEL from ' . $this->table . " where ARTIKEL_ID = '" . $r . "'";
            $this->db->query($query);
            $lobresult = $this->db->single()['ISI_ARTIKEL'];
            $lob = stream_get_contents($lobresult);
            $isi[] = $lob;
            unset($lob);
        }
        return $isi;
    }
    public function hapusArtikel($id)
    {
        $query = "UPDATE " . $this->table . " set status = 'hidden' where ARTIKEL_ID = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
    }
}