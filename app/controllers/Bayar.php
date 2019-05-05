<?php

/**
 * 
 */
class Bayar extends Controller
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
	        $this->view('bayar-kas/index', $data);
	        $this->view('footer');
	    }
	}

	public function proses($nim)
	{
		if (isset($_POST['bayar'])) {
			
			if ($this->model('KasMasuk')->bayarKas($nim)) {

				// $jumlah = $this->model('KasMasuk')->getSingleJlh($nim);
    //             foreach ($jumlah as $da) {
    //                     $jlh = $jlh + $da['jumlah'];
    //                 }

				// if ($this->model('KasMasuk')->ubahJumlahKasUser($nim, $jlh)) {
					?>
					<script>
						alert('Berhasil');
						document.location.href="<?= BASEURL ?>/bayar";
					</script>
					<?php
				 }else{
					?>
					<script>
						alert('Gagal. Silahkan coba lagi');
						document.location.href="<?= BASEURL ?>/bayar";
					</script>
					<?php
				}
		}
	}
	
}