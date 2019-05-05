<?php

/**
 * 
 */
class Profil extends Controller
{
	
	public function index($id)
	{
		if (!isset($_SESSION['id'])) {
    		header('Location:'.BASEURL.'/login');
    	}else {
    		$data['judul'] = 'User Profil';
    		// $data['mhs'] = $this->model('Mahasiswa')->getLimitData();
    		$data['user'] = $this->model('Mahasiswa')->getUser();
    		$data['profil'] = $this->model('Mahasiswa')->getSingleData($id);
            $nim = $data['profil']['username'];
            $data['countSiswa'] = $this->model('Mahasiswa')->getRowCount();
            $data['keluar'] = $this->model('Kaskeluar')->getAllData();
                foreach ($data['keluar'] as $dd) {
                    $data['jlhKeluar'] = $data['jlhKeluar'] + $dd['jumlah'];
                }
            $data['jumlahMasuk'] = $this->model('KasMasuk')->getDataByStatus();
                foreach ($data['jumlahMasuk'] as $d) {
                    $data['jlhMasuk'] = $data['jlhMasuk'] + $d['jumlah'];
                }
            $data['jlh'] = $this->model('KasMasuk')->getSingleJlh($nim);
                foreach ($data['jlh'] as $da) {
                        $data['total'] = $data['total'] + $da['jumlah'];
                    }
            $data['rowCount'] = $this->model('KasMasuk')->getKaliBayar($nim);

            $data['saldo'] = $data['jlhMasuk'] - $data['jlhKeluar'];

    		if ($data['user']['id_user'] == $data['profil']['id_user']) {
    			$data['read'] = '';
    			$data['form'] = '<input type="file" name="file" class="form-control">';
    			$data['btn'] = '<button type="submit" name="ubah" class="btn btn-info">Ubah</button>';
                $data['nama'] = 'Anda';
    		}else{
    			$data['read'] = 'readonly';
    			$data['form'] = '';
    			$data['btn'] = '';
                $data['nama'] = $data['profil']['nama'];
    		}

            if ($data['user']['gambar'] != "") {
                $data['img'] = ''.BASEURL.'/assets/dist/img/'.$data['user']['gambar'].'';
            }else{
                $data['img'] = ''.BASEURL.'/assets/dist/img/user.png';
            }
    		
	        $this->view('header', $data);
	        $this->view('widget', $data);
	        $this->view('sidebar', $data);
	        $this->view('profil/index', $data);
	        $this->view('footer');
	    }
	}

    //fungsi ambil data form ubah profil
    public function ubah($id)
    {
        if (isset($_POST['ubah'])) {
            if ($this->model('Mahasiswa')->ubahProfil($id)) {
                ?>
                <script>
                    alert('Profil berhasil di ubah.');
                    document.location.href="<?= BASEURL ?>/profil/<?= $id ?>";
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert('Profil gagal di ubah. Silahkan coba lagi');
                    document.location.href="<?= BASEURL ?>/profil/<?= $id ?>";
                </script>
                <?php
            }
        }
    }
}