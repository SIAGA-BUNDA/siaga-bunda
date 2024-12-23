<?php
class Postingan
{
  private $table = 'POSTINGAN';

  private $db, $data;

  public function __construct($data = [])
  {
    $this->db = new database();
  }
  public function hapusPostingan($id)
  {
    $query = "UPDATE " . $this->table . " set status = 'hidden' where POSTINGAN_ID = :id";
    $this->db->query($query);
    $this->db->bind(':id', $id);
    $this->db->execute();
    $query = "UPDATE LAPORAN" . " set status_laporan = 'Deleted' where POSTINGAN_ID = :id";
    $this->db->query($query);
    $this->db->bind(':id', $id);
    $this->db->execute();
  }
  public function ignorePostingan($id)
  {
    $query = "UPDATE " . $this->table . " set status = 'ok' where POSTINGAN_ID = :id";
    $this->db->query($query);
    $this->db->bind(':id', $id);
    $this->db->execute();
    $query = "UPDATE LAPORAN" . " set status_laporan = 'Ignored' where POSTINGAN_ID = :id";
    $this->db->query($query);
    $this->db->bind(':id', $id);
    $this->db->execute();
  }
  public function getAllPostingan()
  {
    $query = "SELECT * FROM " . $this->table . " p join USERACCOUNT u on p.id_user = u.id_user  WHERE p.status = 'ok' order by waktu desc";
    $this->db->query($query);
    return $this->db->resultSet();
  }
  public function getIsiPostingan()
  {
    $query = "SELECT POSTINGAN_ID FROM $this->table" . " where status = 'ok' order by waktu desc";
    $this->db->query($query);
    $result = $this->db->resultSet();
    $id = array_column($result, 'POSTINGAN_ID');
    foreach ($id as $r) {
      $query = 'select ISI_POSTINGAN from POSTINGAN' . " where POSTINGAN_ID = '" . $r . "'";
      $this->db->query($query);
      $lobresult = $this->db->single()['ISI_POSTINGAN'];
      $lob = stream_get_contents($lobresult);
      $isi[] = $lob;
      unset($lob);
    }
    return $isi;
  }
  public function tambahPostingan($data, $id)
  {
    $judul = $data['judulPostingan'];
    $isi = $data['isiPostingan'];
    $query = "INSERT INTO " . $this->table . "(ISI_POSTINGAN, JUDUL_POSTINGAN, ID_USER)VALUES (:isi, :judul, :id)";
    $this->db->query($query);
    $this->db->bind(':isi', $isi);
    $this->db->bind(':judul', $judul);
    $this->db->bind(':id', $id);
    $this->db->execute();
  }
  public function addLike($id){
    $query = "UPDATE ". $this->table. " SET jumlah_suka = NVL(jumlah_suka, 0) + 1 WHERE POSTINGAN_ID = :id";
    $this->db->query($query);
    $this->db->bind(':id', $id);
    $this->db->execute();
    $query = "select jumlah_suka from ".$this->table. " where postingan_id = :id";
    $this->db->query($query);
    $this->db->bind(':id', $id);
    return $this->db->single()['JUMLAH_SUKA'];
  }
  public function getIsiPostinganBySearch($searchInput){
    $query = "SELECT POSTINGAN_ID FROM $this->table" . " where judul_postingan like :search or isi_postingan like :search order by waktu desc";
    $this->db->query($query);
    $this->db->bind(':search', "%".$searchInput."%");
    $result = $this->db->resultSet();
    $id = array_column($result, 'POSTINGAN_ID');
    foreach ($id as $r) {
      $query = 'select ISI_POSTINGAN from POSTINGAN' . " where POSTINGAN_ID = '" . $r . "'";
      $this->db->query($query);
      $lobresult = $this->db->single()['ISI_POSTINGAN'];
      $lob = stream_get_contents($lobresult);
      $isi[] = $lob;
      unset($lob);
    }
    return isset($isi)? $isi : null;
  }
  public function getAllPostinganBySearch($searchInput) {
    $query = "SELECT * 
          FROM " . $this->table . " p 
          JOIN USERACCOUNT u ON p.id_user = u.id_user 
          WHERE p.status = 'ok' 
          AND (p.judul_postingan LIKE :search OR p.isi_postingan LIKE :search)
          ORDER BY waktu DESC";

    $this->db->query($query);
    $this->db->bind(':search', "%".$searchInput."%");
    return $this->db->resultSet();
  }
  public function getIsiPostinganById($id){
    $query = "SELECT POSTINGAN_ID FROM $this->table" . " where postingan_id = :id";
    $this->db->query($query);
    $this->db->bind(':id', $id);
    $result = $this->db->resultSet();
    $id = array_column($result, 'POSTINGAN_ID');
    foreach ($id as $r) {
      $query = 'select ISI_POSTINGAN from POSTINGAN' . " where POSTINGAN_ID = '" . $r . "'";
      $this->db->query($query);
      $lobresult = $this->db->single()['ISI_POSTINGAN'];
      $lob = stream_get_contents($lobresult);
    }
    return isset($lob)? $lob : null;
  }
  public function getAllPostinganById($id) {
    $query = "SELECT * FROM " . $this->table . " p join USERACCOUNT u on p.id_user = u.id_user  WHERE p.status = 'ok' and p.postingan_id = :id";
    $this->db->query($query);
    $this->db->bind(':id', $id);
    return $this->db->single();
  }
}