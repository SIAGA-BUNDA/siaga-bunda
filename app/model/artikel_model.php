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
        $query = "INSERT INTO " . $this->table . " (judul_artikel, isi_artikel, admin_id, path) 
                VALUES (:judul_artikel, :isi_artikel, :admin_id, :path)";

        $this->db->query($query);
        $this->db->bind(':judul_artikel', $data['judul_artikel']);
        $this->db->bind(':isi_artikel', $data['isi_artikel']);
        $this->db->bind(':admin_id', $data['id_admin']);
        $this->db->bind(':path', $data['path']);

        return $this->db->execute();
    }
    public function getAllArtikel()
    {
        $query = "SELECT * FROM " . $this->table . " ORDER BY WAKTU DESC";
        $this->db->query($query);
        $results = $this->db->resultSet();
        foreach ($results as &$row) {
            if (is_resource($row['ISI_ARTIKEL'])) {
                $row['ISI_ARTIKEL'] = stream_get_contents($row['ISI_ARTIKEL']);
            }
        }

        return $results;
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

    public function getArtikel($id)
    {
        $query = "SELECT ar.JUDUL_ARTIKEL,ar.ISI_ARTIKEL, TO_CHAR(ar.WAKTU, 'DD Month YYYY') AS WAKTU , ar.ISI_ARTIKEL, ar.PATH, ad.NAMA FROM " . $this->table . " ar join ADMIN ad on (ar.ADMIN_ID = ad.ADMIN_ID) WHERE ar.STATUS= 'ok' AND  ARTIKEL_ID = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $result = $this->db->single();
        $result['ISI_ARTIKEL'] = stream_get_contents($result['ISI_ARTIKEL']);
        return $result;

    }
    public function hapusArtikel($id)
    {
        $query = "UPDATE " . $this->table . " set status = 'hidden' where ARTIKEL_ID = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();

    }
}