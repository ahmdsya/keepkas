<?php

/**
 * 
 */
class KasMasuk {

	private $table = 'kas_masuk';
	private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    //fungsi ambil semua data
    public function getAllData()
    {
    	$this->db->query('SELECT * FROM '. $this->table .' ORDER BY id_masuk DESC');
        return $this->db->fetchAll();
    }

    //fungsi ambil satu data
    public function getSingleData($id)
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id_masuk=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    //fungsi ambil dengan limit
    public function getLimitData($limit)
    {
        $this->db->query('SELECT * FROM '. $this->table .' ORDER BY id_masuk DESC LIMIT '.$limit.'');
        return $this->db->fetchAll();
    }

    //fungsi ambil data by status
    public function getDataByStatus()
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE status=:status');
        $this->db->bind('status', 'Terkonfirmasi');
        return $this->db->fetchAll();
    }

    //fungsi ambil data by status 'menunggu'
    public function getDataByStatusMenunggu()
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE status=:status');
        $this->db->bind('status', 'Menunggu');
        $this->db->fetchAll();
        return $this->db->rowCount();
    }

    //fungsi ambil jumlah kas per user
    public function getSingleJlh($nim)
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE nim=:nim AND status=:status');
        $this->db->bind('nim', $nim);
        $this->db->bind('status', 'Terkonfirmasi');
        return $this->db->fetchAll();
    }

    //ambil data berapa kali bayar
    public function getKaliBayar($nim)
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE nim=:nim AND status=:status');
        $this->db->bind('nim', $nim);
        $this->db->bind('status', 'Terkonfirmasi');
        $this->db->fetchAll();
        return $this->db->rowCount();
    }

    //fungsi konfirmasi
    public function konfirmasi($id)
    {
        $this->db->query(" UPDATE ". $this->table ." SET status=:status WHERE id_masuk=:id ");
        $this->db->bind('status', 'Terkonfirmasi');
        $this->db->bind('id', $id);
        $this->db->execute();
        return true;
    }

    //fungsi hapus data kas masuk
    public function hapus_masuk($id)
    {   
        $query = "DELETE FROM ". $this->table ." WHERE id_masuk=:id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    //fungsi bayar kas
    public function bayarKas($nim)
    {
        $this->db->query('SELECT * FROM tb_user WHERE username=:id');
        $this->db->bind('id', $nim);
        $data = $this->db->single();

        // $nim = $data['username'];
        $nama = $data['nama'];
        $waktu = date('Y-m-d H:i:s');
        $status = 'Menunggu';
        $jumlah = $_POST['jlh'];

        $query = "INSERT INTO ". $this->table ." (nim, nama, waktu, status, jumlah)
                    VALUES (:nim, :nama, :waktu, :status, :jumlah)";
        
        $this->db->query($query);
        $this->db->bind('nim', $nim);
        $this->db->bind('nama', $nama);
        $this->db->bind('waktu', $waktu);
        $this->db->bind('status', $status);
        $this->db->bind('jumlah', $jumlah);
        $this->db->execute();
        return true;
    }

    //update jumlah kas per user
    public function ubahJumlahKasUser($nim, $jlh)
    {
        $tgl = date('Y-m-d');
        $this->db->query(" UPDATE tb_user SET jumlah=:jumlah, tgl=:tgl WHERE username=:username ");
        $this->db->bind('jumlah', $jlh);
        $this->db->bind('tgl', $tgl);
        $this->db->bind('username', $nim);
        $this->db->execute();
        return true;
    }

    //fungsi hapus semua data kas masuk
    public function delAllData()
    {
        $query = "DELETE FROM ". $this->table;
        
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}