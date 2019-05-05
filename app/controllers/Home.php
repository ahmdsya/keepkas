<?php 

class Home extends Controller {

    public function index()
    {
    	if (!isset($_SESSION['id'])) {
    		header('Location:'.BASEURL.'/login');
    	}else {
    		$data['judul'] = 'Sistem Pengolahan Uang Kas Kelas';

            $batas = 5;
            $jumlah = $this->model('Mahasiswa')->getRowCount();
            $data['halaman'] = ceil($jumlah / $batas);
            $data['page']    = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
            $mulai   = ($data['page'] - 1) * $batas;
            $data['mhs'] = $this->model('Mahasiswa')->getLimitData($mulai,$batas);
            
            

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

    		if ($data['user']['gambar'] != "") {
    			$data['img'] = ''.BASEURL.'/assets/dist/img/'.$data['user']['gambar'].'';
    		}else{
    			$data['img'] = ''.BASEURL.'/assets/dist/img/user.png';
    		}
    		
	        $this->view('header', $data);
	        $this->view('widget', $data);
	        $this->view('sidebar', $data);
	        $this->view('home/index', $data);
	        $this->view('footer');
	    }
    }
}