<?php

/**
 * 
 */
class Ubah_Password extends Controller
{
	
	public function index()
	{
		if (!isset($_SESSION['id'])) {
    		header('Location:'.BASEURL.'/login');
    	}else {
    		$data['judul'] = 'User Profil';
    		$data['user'] = $this->model('Mahasiswa')->getUser();
    		$data['countSiswa'] = $this->model('Mahasiswa')->getRowCount();
    		$data['keluar'] = $this->model('Kaskeluar')->getAllData();
                foreach ($data['keluar'] as $dd) {
                    $data['jlhKeluar'] = $data['jlhKeluar'] + $dd['jumlah'];
                }
    		$data['jumlahMasuk'] = $this->model('KasMasuk')->getDataByStatus();
                foreach ($data['jumlahMasuk'] as $d) {
                    $data['jlhMasuk'] = $data['jlhMasuk'] + $d['jumlah'];
                }

            $data['saldo'] = $data['jlhMasuk'] - $data['jlhKeluar'];

            if (empty($data['user']['gambar'])) {
                    $data['img'] = ''.BASEURL.'/assets/dist/img/user.png';
                }else{
                    $data['img'] = ''.BASEURL.'/assets/dist/img/'.$data ['user']['gambar'].'';
                }
    		
	        $this->view('header', $data);
	        $this->view('widget', $data);
	        $this->view('sidebar', $data);
	        $this->view('ubah-password/index', $data);
	        $this->view('footer');
	    }
	}

	//fungsi ambil data form ubah pass
	public function ubah($id)
	{
		if (isset($_POST['ubah'])) {
			if ($this->model('Mahasiswa')->ubahPassword($id)) {
				?>
				<script>
					alert('Password berhasil di ubah.');
					document.location.href="<?= BASEURL ?>/ubah_password";
				</script>
				<?php
			}else{
				?>
				<script>
					alert('Password gagal di ubah. Silahkan coba lagi.');
					document.location.href="<?= BASEURL ?>/ubah_password";
				</script>
				<?php
			}
		}
	}
}