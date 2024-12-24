<?php
class Laporan
{
    private $table = 'LAPORAN';

    private $db, $data;

    public function __construct($data = [])
    {
        $this->db = new database();
    }
    public function updateStatus($data)
    {
        // Fetch the current status
        $query = "SELECT status FROM laporan WHERE laporan_id = :laporan_id";
        $this->db->query($query);
        $this->db->bind(':laporan_id', $data['laporan_id']);
        $currentStatus = $this->db->single()['status'];

        // Update the status
        $updateQuery = "UPDATE laporan SET status = :new_status WHERE laporan_id = :laporan_id";
        $this->db->query($updateQuery);
        $this->db->bind(':new_status', $data['new_status']);
        $this->db->bind(':laporan_id', $data['laporan_id']);
        $this->db->execute();

        // Log the status change
        $logData = [
            'laporan_id' => $data['laporan_id'],
            'old_status' => $currentStatus,
            'new_status' => $data['new_status'],
        ];
        $this->logStatusChange($logData);
    }
    // Log status changes
    private function logStatusChange($data)
    {
        $query = "INSERT INTO laporan_status_log (laporan_id, old_status, new_status, change_time) 
                VALUES (:laporan_id, :old_status, :new_status, SYSTIMESTAMP)";
        $this->db->query($query);
        $this->db->bind(':laporan_id', $data['laporan_id']);
        $this->db->bind(':old_status', $data['old_status']);
        $this->db->bind(':new_status', $data['new_status']);
        $this->db->execute();
    }
    public function getLaporanPostingan()
    {
        $query = "SELECT 
                    l.LAPORAN_ID,
                    l.ISI_LAPORAN, 
                    l.WAKTU,
                    l.STATUS_LAPORAN,
                    p.POSTINGAN_ID,
                    p.ISI_POSTINGAN
                    FROM LAPORAN l
                    JOIN POSTINGAN p ON l.POSTINGAN_ID = p.POSTINGAN_ID";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function getLaporanKomentar()
    {
        $query = "SELECT 
                    l.LAPORAN_ID,
                    l.ISI_LAPORAN, 
                    l.WAKTU,
                    l.STATUS_LAPORAN,
                    k.KOMENTAR_ID,
                    k.ISI_KOMENTAR
                    FROM LAPORAN l
                    JOIN KOMENTAR k ON l.KOMENTAR_ID = k.KOMENTAR_ID";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function getIsiPostingan()
    {
        $query = "SELECT p.POSTINGAN_ID FROM LAPORAN l
                    RIGHT JOIN POSTINGAN p ON l.POSTINGAN_ID = p.POSTINGAN_ID";
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
    public function getIsiKomentar()
    {
        $query = "SELECT k.KOMENTAR_ID FROM LAPORAN l
                    RIGHT JOIN KOMENTAR k ON l.KOMENTAR_ID = k.KOMENTAR_ID";
        $this->db->query($query);
        $result = $this->db->resultSet();
        $id = array_column($result, 'KOMENTAR_ID');
        foreach ($id as $r) {
            $query = 'select ISI_KOMENTAR from KOMENTAR' . " where KOMENTAR_ID = '" . $r . "'";
            $this->db->query($query);
            $lobresult = $this->db->single()['ISI_KOMENTAR'];
            $lob = stream_get_contents($lobresult);
            $isi[] = $lob;
            unset($lob);
        }
        return $isi;
    }
    public function addLaporanPostingan($data)
    {
        $query = "call insert_laporan_postingan (:id_user, :postingan_id, :isi_laporan)";
        $this->db->query($query);
        $this->db->bind(':id_user', $data['id_user']);
        $this->db->bind(':postingan_id', $data['postingan_id']);
        $this->db->bind(':isi_laporan', $data['isi_laporan']);
        $this->db->execute();
    }
    public function addLaporanKomentar($data)
    {
        $query = "call insert_laporan_komentar (:id_user, :komentar_id, :isi_laporan)";
        $this->db->query($query);
        $this->db->bind(':id_user', $data['id_user']);
        $this->db->bind(':komentar_id', $data['komentar_id']);
        $this->db->bind(':isi_laporan', $data['isi_laporan']);
        $this->db->execute();
    }
}