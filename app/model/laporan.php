<?php
class Laporan{
    private $table = 'LAPORAN';

    private $db, $data;

    public function __construct($data = [])
    {
        $this->db = new database();
    }
    public function getLaporanPostingan(){
        $query = "SELECT 
                    l.LAPORAN_ID,
                    l.ISI_LAPORAN, 
                    l.WAKTU,
                    l.STATUS_LAPORAN,
                    p.POSTINGAN_ID,
                    p.ISI_POSTINGAN
                    FROM LAPORAN l
                    RIGHT JOIN POSTINGAN p ON l.POSTINGAN_ID = p.POSTINGAN_ID";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function getLaporanKomentar(){
        $query = "SELECT 
                    l.LAPORAN_ID,
                    l.ISI_LAPORAN, 
                    l.WAKTU,
                    l.STATUS_LAPORAN,
                    k.KOMENTAR_ID,
                    k.ISI_KOMENTAR
                    FROM LAPORAN l
                    RIGHT JOIN KOMENTAR k ON l.KOMENTAR_ID = k.KOMENTAR_ID";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function getIsiPostingan(){
        $query = "SELECT p.POSTINGAN_ID FROM LAPORAN l
                    RIGHT JOIN POSTINGAN p ON l.POSTINGAN_ID = p.POSTINGAN_ID";
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
    public function getIsiKomentar(){
        $query = "SELECT k.KOMENTAR_ID FROM LAPORAN l
                    RIGHT JOIN KOMENTAR k ON l.KOMENTAR_ID = k.KOMENTAR_ID";
        $this->db->query($query);
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