<?php
class Komentar
{
  private $table = 'KOMENTAR';

  private $db, $data;

  public function __construct($data = [])
  {
    $this->db = new database();
  }
  public function hapusKomentar($id)
  {
    $query = "UPDATE " . $this->table . " set status = 'hidden' where KOMENTAR_ID = :id";
    $this->db->query($query);
    $this->db->bind(':id', $id);
    $this->db->execute();
    $query = "UPDATE LAPORAN" . " set status_laporan = 'Deleted' where KOMENTAR_ID = :id";
    $this->db->query($query);
    $this->db->bind(':id', $id);
    $this->db->execute();
  }
  public function ignoreKomentar($id)
  {
    $query = "UPDATE " . $this->table . " set status = 'ok' where KOMENTAR_ID = :id";
    $this->db->query($query);
    $this->db->bind(':id', $id);
    $this->db->execute();
    $query = "UPDATE LAPORAN" . " set status_laporan = 'Ignored' where KOMENTAR_ID = :id";
    $this->db->query($query);
    $this->db->bind(':id', $id);
    $this->db->execute();
  }
  public function getAllKomentar()
  {
    $query = "SELECT * FROM " . $this->table;
    $this->db->query($query);
    return $this->db->resultSet();
  }
  public function tambahKomentar($data, $id)
  {
    $query = "CALL insert_komentar(:isi_komentar, :user_id, :postingan_id)";
    $this->db->query($query);
    $this->db->bind(':isi_komentar', $data['isi_komentar']);
    $this->db->bind(':user_id', $id);
    $this->db->bind(':postingan_id', $data['postingan_id']);
    $this->db->execute();
  }
  public function getCommentCount()
  {
    $query = "SELECT 
    COUNT(k.komentar_id) AS jumlah_komentar
    FROM 
    postingan p
    LEFT JOIN 
        komentar k
    ON 
        p.postingan_id = k.postingan_id
    WHERE 
        p.status = 'ok'
    GROUP BY 
        p.postingan_id
    ORDER BY 
    p.postingan_id desc";
    $this->db->query($query);
    return array_column($this->db->resultSet(), 'JUMLAH_KOMENTAR');
  }
  public function getCommentCountBySearch($searchInput){
    $query = "SELECT 
    COUNT(k.komentar_id) AS jumlah_komentar
    FROM 
    postingan p
    LEFT JOIN 
        komentar k
    ON 
        p.postingan_id = k.postingan_id
    WHERE 
            p.judul_postingan LIKE :search OR p.isi_postingan LIKE :search
    GROUP BY 
        p.postingan_id
    ORDER BY 
    p.postingan_id desc";
    $this->db->query($query);
    $this->db->bind(':search', '%'. $searchInput. '%');
    return array_column($this->db->resultSet(), 'JUMLAH_KOMENTAR');
  }
  public function getCommentCountById($id){
    $query = "SELECT 
    COUNT(k.komentar_id) AS jumlah_komentar
    FROM 
    postingan p
    LEFT JOIN 
        komentar k
    ON 
        p.postingan_id = k.postingan_id
    WHERE 
            p.postingan_id = :id
    GROUP BY 
        p.postingan_id";
    $this->db->query($query);
    $this->db->bind(':id', $id);
    return $this->db->single()['JUMLAH_KOMENTAR'];
  }

  public function getAllKomentarById($id)
  {
    $query = "SELECT * FROM " . $this->table . " k join postingan p on p.postingan_id = k.postingan_id join useraccount u on u.id_user = k.id_user where k.postingan_id = :id";
    $this->db->query($query);
    $this->db->bind(':id', $id);
    return $this->db->resultSet();
  }

  public function getIsiKomentarById($id){
    $query = "SELECT k.KOMENTAR_ID FROM " . $this->table ." k join postingan p on p.postingan_id = k.postingan_id where k.postingan_id = :id";
    $this->db->query($query);
    $this->db->bind(':id', $id);
    $result = $this->db->resultSet();       
    $id = array_column($result, 'KOMENTAR_ID');
    foreach($id as $r) {
        $query = 'select ISI_KOMENTAR from KOMENTAR' ." where KOMENTAR_ID = '" . $r. "'";
        $this->db->query($query);
        $lobresult = $this->db->single()['ISI_KOMENTAR'];
          $lob = stream_get_contents($lobresult);
          $isi[] = $lob;
          unset($lob);
      }
      return $isi;
}
}


