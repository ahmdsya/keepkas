<?php

/**
 * 
 */
class Rincian extends Controller
{
	
	public function index($nim)
	{
		if (!isset($_SESSION['id'])) {
    		header('Location:'.BASEURL.'/login');
    	}else {
    		$data['judul'] = 'Rincian Kas';
    		$data['user'] = $this->model('Mahasiswa')->getUser();
    		$data['rincian'] = $this->model('KasMasuk')->getSingleJlh($nim);
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

    		if ($data['user']['gambar'] != "") {
    			$data['img'] = ''.BASEURL.'/assets/dist/img/'.$data['user']['gambar'].'';
    		}else{
    			$data['img'] = ''.BASEURL.'/assets/dist/img/user.png';
    		}
    		
	        $this->view('header', $data);
	        $this->view('widget', $data);
	        $this->view('sidebar', $data);
	        $this->view('rincian/index', $data);
	        $this->view('footer');
	    }
    }
}
