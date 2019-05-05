<?php

/**
 * 
 */
class Mahasiswa {

	private $table = 'tb_user';
	private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    //fungsi ambil semua data
    public function getAllData()
    {
    	$this->db->query('SELECT * FROM '. $this->table .' ORDER BY id_user ASC');
        return $this->db->fetchAll();
    }

    //fungsi ambil jumlah data
    public function getRowCount()
    {
        $this->db->query('SELECT * FROM '. $this->table .' ORDER BY id_user ASC');
        $this->db->fetchAll();
        return $this->db->rowCount();
    }

    public function getLimitData($awal,$limit)
    {
        $this->db->query('SELECT * FROM '. $this->table .' ORDER BY id_user ASC LIMIT '.$awal.' , '.$limit.'');
        return $this->db->fetchAll();
    }

    //fungsi ambil satu data
    public function getSingleData($id)
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id_user=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    //fungsi tambah data
    public function tambah_mahasiswa($data)
    {   
        $query = "INSERT INTO ". $this->table ." (username, password, nama, jurusan, kelas)
                    VALUES (:username, :password, :nama, :jurusan, :kelas)";
        
        $this->db->query($query);
        $this->db->bind('username', $data['nim']);
        $this->db->bind('password', $data['nim']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jurusan', $data['jur']);
        $this->db->bind('kelas', $data['kls']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    //fungsi ubah data
    public function ubah_mahasiswa($data)
    {   
        $query = "UPDATE ". $this->table ." SET nama=:nama, jurusan=:jurusan, kelas=:kelas WHERE id_user=:id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jurusan', $data['jur']);
        $this->db->bind('kelas', $data['kls']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    //fungsi hapus data
    public function hapus_mahasiswa($id)
    {   
        $query = "DELETE FROM ". $this->table ." WHERE id_user=:id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    //fungsi menambahkan data mahasiswa dengan import file
    public function import_mahasiswa()
    {
    	$ekstensi_diperbolehkan	= array('xlsx');
		$namafile 				= $_FILES['file']['name'];
		$x 						= explode('.', $namafile);
		$ekstensi 				= strtolower(end($x));
		$ukuran					= $_FILES['file']['size'];
		$file_tmp				= $_FILES['file']['tmp_name'];

		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

			if ($ukuran < 1044070) {

				$nama_baru = 'Mahasiswa';
				$nama_baru .= '.';
				$nama_baru .= $ekstensi;

				if (is_file('assets/excel/'.$nama_baru)) {
					unlink('assets/excel/'.$nama_baru);
					}

				move_uploaded_file($file_tmp, 'assets/excel/'.$nama_baru);

				$obj = PHPExcel_IOFactory::load('assets/excel/'.$nama_baru);
				$data = $obj->getActiveSheet()->toArray(null, true, true, true);

				for ($i=2; $i <= count($data) ; $i++) {

					$nim = ($data[$i]["A"]);
					$nama = ($data[$i]["B"]);
					$jurusan = ($data[$i]["C"]);
					$kelas = ($data[$i]["D"]);

					$query = "INSERT INTO ". $this->table ." (username, password, nama, jurusan, kelas)
                    VALUES (:username, :password, :nama, :jurusan, :kelas)";
        
			        $this->db->query($query);
			        $this->db->bind('username', $nim);
			        $this->db->bind('password', $nim);
			        $this->db->bind('nama', $nama);
			        $this->db->bind('jurusan', $jurusan);
			        $this->db->bind('kelas', $kelas);

			        $this->db->execute();

			        // return $this->db->rowCount();

				}
			}
		}
    }

    //fungsi ubah profil
    public function ubahProfil($id)
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id_user=:id');
        $this->db->bind('id', $id);
        $data = $this->db->single();

        $nama = $_POST['nama'];
        $jur = $_POST['jur'];
        $kls = $_POST['kls'];

        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $namafile               = $_FILES['file']['name'];
        $x                      = explode('.', $namafile);
        $ekstensi               = strtolower(end($x));
        $ukuran                 = $_FILES['file']['size'];
        $file_tmp               = $_FILES['file']['tmp_name'];

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

            if ($ukuran < 1044070) {

                $nama_baru = uniqid();
                $nama_baru .= '.';
                $nama_baru .= $ekstensi;

                move_uploaded_file($file_tmp, 'assets/dist/img/'.$nama_baru);
                unlink('assets/dist/img/'.$data['gambar']);

                $query = "UPDATE ". $this->table ." SET nama=:nama, jurusan=:jurusan, kelas=:kelas, gambar=:gambar WHERE id_user=:id";
        
                $this->db->query($query);
                $this->db->bind('nama', $nama);
                $this->db->bind('jurusan', $jur);
                $this->db->bind('kelas', $kls);
                $this->db->bind('gambar', $nama_baru);
                $this->db->bind('id', $id);
                $this->db->execute();
                return true;
            }
        }else{
                $query = "UPDATE ". $this->table ." SET nama=:nama, jurusan=:jurusan, kelas=:kelas WHERE id_user=:id";
        
                $this->db->query($query);
                $this->db->bind('nama', $nama);
                $this->db->bind('jurusan', $jur);
                $this->db->bind('kelas', $kls);
                $this->db->bind('id', $id);
                $this->db->execute();
                return true;
        }
    }

    //fungsi login
    public function cekLogin($user, $pass)
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE username=:username AND password=:password');
        $this->db->bind('username', $user);
        $this->db->bind('password', $pass);
        $this->db->execute();
        $data = $this->db->single();

        if ($this->db->rowCount() > 0) {
            
            $_SESSION['id'] = $data['id_user'];
            return true;
        }

    }

    //fungsi ambil data user
    public function getUser()
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id_user=:id');
        $this->db->bind('id', $_SESSION['id']);

        return $this->db->single();
    }

    //fungsi logout/keluar
    public function logout()
    {
        session_destroy();
        return true;
    }

    //fungsi ubah password
    public function ubahPassword($id)
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id_user=:id AND password=:password');
        $this->db->bind('id', $id);
        $this->db->bind('password', $_POST['lama']);
        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            
            if ($_POST['baru'] == $_POST['ulangi']) {
                
                $query = "UPDATE ". $this->table ." SET password=:password WHERE id_user=:id";
        
                $this->db->query($query);
                $this->db->bind('password', $_POST['baru']);
                $this->db->bind('id', $id);
                $this->db->execute();
                return true;
            }else{
                ?>
                <script>
                    alert('Password yang Anda ulangi tidak sesuai.');
                    document.location.href="<?= BASEURL ?>/ubah_password";
                </script>
                <?php
            }
        }else{
            ?>
            <script>
                alert('Password lama tidak sesuai.');
                document.location.href="<?= BASEURL ?>/ubah_password";
            </script>
            <?php
        }
    }

    //fungsi hapus semua data mahasiwa
    public function delAllData()
    {
        $query = "DELETE FROM ". $this->table;
        
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }
}