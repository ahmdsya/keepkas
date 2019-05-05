<?php 

class KasKeluar {

    private $table = 'kas_keluar';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    //fungsi ambil semua data
    public function getAllData()
    {
    	$this->db->query('SELECT * FROM '. $this->table .' ORDER BY id_keluar DESC');
        return $this->db->fetchAll();
    }

    //fungsi ambil satu data
    public function getSingleData($id)
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id_keluar=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    //fungsi tambah data kas keluar
    public function tambah_keluar($data)
    {   
        $query = "INSERT INTO ". $this->table ." (keterangan, tanggal, jumlah)
                    VALUES (:keterangan, :tanggal, :jumlah)";
        
        $this->db->query($query);
        $this->db->bind('keterangan', $data['ket']);
        $this->db->bind('tanggal', $data['tgl']);
        $this->db->bind('jumlah', $data['jlh']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    //fungsi ubah data kas keluar
    public function ubah_keluar($data)
    {   
        $query = "UPDATE ". $this->table ." SET keterangan=:keterangan,
                        tanggal=:tanggal,
                        jumlah=:jumlah WHERE id_keluar=:id";
        
        $this->db->query($query);
        $this->db->bind('keterangan', $data['ket']);
        $this->db->bind('tanggal', $data['tgl']);
        $this->db->bind('jumlah', $data['jlh']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    //fungsi hapus data kas keluar
    public function hapus_keluar($id)
    {   
        $query = "DELETE FROM ". $this->table ." WHERE id_keluar=:id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    //fungsi hapus semua data kas keluar
    public function delAllData()
    {
        $query = "DELETE FROM ". $this->table;
        
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}